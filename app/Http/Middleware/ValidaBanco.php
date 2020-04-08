<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ValidaBanco
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $banco = Auth::user()->dados_banco;
        if($banco == null){
            return redirect('/banco')->withInput([
                'mensagem' => "Informe seus dados bancários antes de continuar!"
            ]);
        }

        return $next($request);
    }
}
