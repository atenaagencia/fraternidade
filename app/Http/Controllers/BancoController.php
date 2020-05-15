<?php

namespace App\Http\Controllers;

use App\DadosBancario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BancoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $banco = Auth::user()->dados_banco;
        return view('user.pages.banco.index')->with(compact('banco'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('user.pages.banco.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query = DadosBancario::create($request->all());
        return redirect(route('banco.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DadosBancario  $dadosBancario
     * @return \Illuminate\Http\Response
     */
    public function show(DadosBancario $dadosBancario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DadosBancario  $dadosBancario
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $dadosBancario = DadosBancario::find($id);
        return view('user.pages.banco.edit')->with(compact('dadosBancario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DadosBancario  $dadosBancario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dadosBancario = DadosBancario::find($id);
        $dadosBancario->update($request->all());

        return redirect()->route('banco.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DadosBancario  $dadosBancario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banco = DadosBancario::find($id);
        $banco->delete();
        return redirect()->route('banco.index');
    }
}
