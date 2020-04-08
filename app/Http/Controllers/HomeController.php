<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\FilaLider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fila = FilaLider::where('status','dentro')->orderBy('posicao','asc')->get();

        return view('user.home')->with(compact('fila'));
    }
}
