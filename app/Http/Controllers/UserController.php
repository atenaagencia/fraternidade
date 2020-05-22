<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->pesquisa){
            $usuario = User::where('nome','like', '%'.$request->pesquisa.'%')->orWhere('usuario', 'like', '%' . $request->pesquisa . '%')->paginate(15);
        }else{
            $usuario = User::orderby('id', 'desc')->paginate(15);
        }        
        return view('user.pages.cadastro.index')->with(compact('usuario'));
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
        User::create($request->all());

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.pages.cadastro.show')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.pages.cadastro.edit')->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        return back();
    }

    public function update2(Request $request, $id)
    {
        $user = User::find($id);
        if($request->resetar == 1){
            $user->password = bcrypt($request->password);
            $user->save();
            return back()->withInput(['m_reset' => 'Senha de '.$user->nome.' resetada']);
        }
   
        if ($request->password == $request->c_password) {
            $user->password = bcrypt($request->password);
           $user->save();   
           Auth::logout();
           return redirect('/');
        }else{
           return back()->withInput(['m_senha'=> 'Senhas não conferem']);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
