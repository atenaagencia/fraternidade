<?php

namespace App\Http\Controllers;

use App\Fila;
use Illuminate\Http\Request;

class FilaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fila = Fila::where('tipo', 1)->orderBy('posicao', 'asc')->get();
        return view('filas.pages.index')->with(compact('fila'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $pos_atual = $fila->posicao;
        $lista = Fila::where('posicao','>',$pos_atual)->get();
        $query = $fila->delete();
        if ($query) {
            foreach ($lista as $pos) {                
                $pos->posicao = $pos->posicao - 1;
                $pos->save();
            }
        }
        return redirect('filas');
    }
}
