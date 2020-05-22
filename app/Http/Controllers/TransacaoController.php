<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transacao;
use App\Fila;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TransacaoController extends Controller
{
    public function t_inicial($id)
    {

        $qt = niveis($id)->quantidade;
        $c_fila = Fila::where('tipo', $id)->where('posicao', '>', 0)->where('cont_receber', '<', $qt)->orderBy('posicao', 'asc')->first();
        if (isset($c_fila)) {
            $q_transacao = Transacao::create([
                'remetente_id' => Auth::user()->id,
                'destinatario_id' => $c_fila->user_id,
                'origem_id' => $id,
            ]);
            $c_fila->cont_receber =  $c_fila->cont_receber + 1;
            $c_fila->save();
            $user = User::find(Auth::user()->id);
            $user->status = 'pendente';
            $user->save();
        }

        return back();
    }

    public function set_comprovante(Request $request)
    {

        $extension = $request->file('arquivo')->extension();
        $path = $request->file('arquivo')->storeAs(
            'comprovantes',
            'comprovante_' . $request->t_id . '.' . $extension
        );
        $q_transacao = Transacao::find($request->t_id);
        $q_transacao->arquivo = 'comprovante_' . $request->t_id . '.' . $extension;
        $q_transacao->status = 'pendente';
        $q_transacao->valor = $request->valor;
        $q_transacao->save();


        return back();
    }

    public function download($id)
    {

        $q_transacao = Transacao::find($id);
        return Storage::download('comprovantes/' . $q_transacao->arquivo);
    }

    public function liberar_nivel1(Request $request)
    {

        $transacao = Transacao::find($request->transacao_id);
        $fila_destino = Fila::where('user_id', $transacao->destinatario_id)->first();
        $pos_atual = $fila_destino->posicao;
        $user = User::find($transacao->destinatario_id);

        if (($fila_destino->contador < 2) && ($fila_destino->status == 'dentro')) {
            $fila_destino->contador = $fila_destino->contador + 1;
            $fila_destino->save();

            if ($fila_destino->contador == 2) {
                $fila_destino->tipo = 2;
                $fila_destino->contador = 0;
                $fila_destino->cont_receber = 0;
                $fila_destino->posicao = 0;
                $fila_destino->status = 'fora';
                $fila_destino->save();

                $user->cont_deposito = 0;
                $user->nivel_id = 2;
                $user->status = 'pendente';
                $user->saldo =   $user->saldo + $transacao->valor;
                $user->save();

                $lista = Fila::where('tipo', 1)->where('posicao', '>', $pos_atual)->get();
                if ($lista) {
                    foreach ($lista as $pos) {
                        $pos->posicao = $pos->posicao - 1;
                        $pos->save();
                    }
                }
            } else {
                $user->cont_deposito = $user->cont_deposito + 1;
                $user->saldo = $user->saldo + $transacao->valor;
                $user->save();
            }



            $q_fila = Fila::where('tipo', 1)->orderBy('posicao', 'desc')->first();
            if ($q_fila == null) {
                $n_posicao = 1;
            } else {
                $n_posicao = $q_fila->posicao + 1;
            }

            $query_fila = Fila::create([
                'user_id' => $transacao->remetente_id,
                'posicao' => $n_posicao,
                'tipo' => 1,
            ]);

            $transacao->status = 'liberado';
            $transacao->save();
            $remetente = User::find($transacao->remetente_id);
            $remetente->status = 'ativo';
            $remetente->save();
        }

        return back();
    }

    public function liberar_nivel2(Request $request)
    {

        $transacao = Transacao::find($request->transacao_id);
        $fila_destino = Fila::where('user_id', $transacao->destinatario_id)->first();
        $pos_atual = $fila_destino->posicao;
        $user = User::find($transacao->destinatario_id);

        if (($fila_destino->contador < 3) && ($fila_destino->status == 'dentro')) {
            $fila_destino->contador = $fila_destino->contador + 1;
            $fila_destino->save();

            if ($fila_destino->contador == 3) {
                $fila_destino->tipo = 3;
                $fila_destino->contador = 0;
                $fila_destino->cont_receber = 0;
                $fila_destino->posicao = 0;
                $fila_destino->status = 'fora';
                $fila_destino->save();

                $user->cont_deposito = 0;
                $user->nivel_id = 3;
                $user->status = 'pendente';
                $user->saldo =   $user->saldo + $transacao->valor;
                $user->save();

                $lista = Fila::where('tipo', 2)->where('posicao', '>', $pos_atual)->get();
                if ($lista) {
                    foreach ($lista as $pos) {
                        $pos->posicao = $pos->posicao - 1;
                        $pos->save();
                    }
                }
            } else {
                $user->cont_deposito = $user->cont_deposito + 1;
                $user->saldo = $user->saldo + $transacao->valor;
                $user->save();
            }



            $q_fila = Fila::where('tipo', 3)->orderBy('posicao', 'desc')->first();
            if ($q_fila == null) {
                $n_posicao = 1;
            } else {
                $n_posicao = $q_fila->posicao + 1;
            }

            $fila_remetente = Fila::where('user_id', "" . $request->remetente . "")->first();
            $fila_remetente->tipo = 2;
            $fila_remetente->contador = 0;
            $fila_remetente->cont_receber = 0;
            $fila_remetente->posicao = 0;
            $fila_remetente->status = 'dentro';
            $fila_remetente->save();


            $transacao->status = 'liberado';
            $transacao->save();
            $remetente = User::find($transacao->remetente_id);
            $remetente->status = 'ativo';
            $remetente->save();
        }

        return back();
    }


    public function show_rec()
    {
        $t_recebidas = Transacao::where('destinatario_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('user.pages.transacoes.index_recebidas')->with(compact('t_recebidas'));
    }

    public function show_dep()
    {
        $t_efetuadas = Transacao::where('remetente_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('user.pages.transacoes.index_efetuadas')->with(compact('t_efetuadas'));
    }
}
