<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\DadosBancario;

class UserController extends Controller
{
    public function banco_index(){

        $banco = Auth::user()->dados_banco()->first();
        return view('user.pages.banco')->with(compact('banco'));
    }

    public function banco_create(Request $request)
    {
        $query = DadosBancario::create($request->all());
        return back();
    }

    public function banco_update(Request $request, $id)
    {
        $query = DadosBancario::find($id);
        $query->update($request->all());
        $query->save();
        return back();
    }
}

