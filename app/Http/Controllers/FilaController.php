<?php

namespace App\Http\Controllers;

use App\Fila;
use App\User;
use Illuminate\Http\Request;

class FilaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->nivel) {
            $fila = Fila::where('tipo', $request->nivel)->orderBy('posicao', 'asc')->paginate(50);
            $nivel = $request->nivel;
        } else {
            $fila = Fila::where('tipo', 1)->orderBy('posicao', 'asc')->paginate(50);
            $nivel = 1;
        }
   

        return view('filas.pages.index')->with(compact('fila', 'nivel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $fila = Fila::where('tipo', $user->nivel_id)->where('status', 'dentro')->get();
        $q_fila = $fila->count();
        if ($q_fila == 0) {
            Fila::create([
                'user_id' => $user->id,
                'posicao' => 1,
                'tipo' => $user->nivel_id,
                'contador' => $user->cont_deposito,
            ]);
        } else {
            Fila::create([
                'user_id' => $user->id,
                'posicao' => $q_fila + 1,
                'tipo' => $user->nivel_id,
                'contador' => $user->cont_deposito,
            ]);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fila  $fila
     * @return \Illuminate\Http\Response
     */
    public function show(Fila $fila)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fila  $fila
     * @return \Illuminate\Http\Response
     */
    public function edit(Fila $fila)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fila  $fila
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fila $fila)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fila  $fila
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fila $fila)
    {
        $user = User::find($fila->user_id);
        $pos_atual = $fila->posicao;
        $lista = Fila::where('posicao', '>', $pos_atual)->where('tipo', $user->nivel_id)->get();
        $query = $fila->delete();
        if ($query) {
            foreach ($lista as $pos) {
                $pos->posicao = $pos->posicao - 1;
                $pos->save();
            }
        }
        return back();
    }

    public function inserirtodos($id)
    {

        $users = User::where('nivel_id',$id)->get();
        foreach ($users as $user) {

            $fila = Fila::where('tipo', $user->nivel_id)->where('status', 'dentro')->get();
            $q_fila = $fila->count();
            if ($q_fila == 0) {
                Fila::create([
                    'user_id' => $user->id,
                    'posicao' => 1,
                    'tipo' => $user->nivel_id,
                    'contador' => $user->cont_deposito,
                ]);
            } else {
                Fila::create([
                    'user_id' => $user->id,
                    'posicao' => $q_fila + 1,
                    'tipo' => $user->nivel_id,
                    'contador' => $user->cont_deposito,
                ]);
            }
        }
        return 'okay';
    }


}
