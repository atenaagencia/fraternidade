<?php

namespace App\Http\Controllers;

use App\FilaLider;
use Illuminate\Http\Request;

class FilaLiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fila = FilaLider::where('status','dentro')->orderBy('posicao', 'asc')->get();
        return view('filas.pages.lideres')->with(compact('fila'));
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
     * @param  \App\FilaLider  $filaLider
     * @return \Illuminate\Http\Response
     */
    public function show(FilaLider $filaLider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FilaLider  $filaLider
     * @return \Illuminate\Http\Response
     */
    public function edit(FilaLider $filaLider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FilaLider  $filaLider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FilaLider $filaLider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FilaLider  $filaLider
     * @return \Illuminate\Http\Response
     */
    public function destroy(FilaLider $filaLider)
    {
        //
    }
}
