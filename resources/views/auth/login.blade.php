@extends('layouts.win-happy')

<link href="{{ asset('css/login-page.css') }}" rel="stylesheet">

<style>
.form-check {
    position: relative !important;
    display: block !important;
    padding-left: 1.25rem !important;
}
input[type=checkbox], input[type=radio] {
    box-sizing: border-box !important;
    padding: 0 !important;
}
.form-check-input {
    position: absolute !important;
    margin-top: .3rem !important;
    margin-left: -1.25rem !important;
}
</style>
@section('content')
<br><br>

<div class="font-montserrat text-center mt-4 mx-auto">
    <h1><i class="fas fa-handshake text-light mr-4"></i>Acesso ao Sistema</h1>
</div>

<div class="login-page">
    <div class="form">
        <form class="register-form" method="POST" action="{{ route('register') }}">
            @csrf

            <p class="lead font-weight-bold text-left mb-2 mt-3 text-dark">INFORMAÇÕES PESSOAIS</p><hr>
            <input id="name" type="text" class="@error('name') is-invalid @enderror font-weight-bold text-dark lead" name="nome"
                value="{{ old('nome') }}" required autocomplete="nome" autofocus placeholder="Nome">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small class="text-dark text-left">Sem espaçamento, somente letras minusculas</small>
            <input id="usuario" type="text" class="@error('usuario') is-invalid @enderror font-weight-bold text-dark lead" name="usuario"
                value="{{ old('nome') }}" required autocomplete="nome" autofocus placeholder="Usuário">
               
            <input id="email" type="email" class="@error('email') is-invalid @enderror font-weight-bold text-dark lead" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="email" type="text" class="font-weight-bold text-dark lead" name="telefone" value="{{ old('telefone') }}" required
                autocomplete="telefone" autofocus placeholder="Telefone">

            @error('telefone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="email" type="text" class="font-weight-bold text-dark lead" name="whatsapp" value="{{ old('whatsapp') }}" required
                autocomplete="whatsapp" autofocus placeholder="Whatsapp">

            @error('whatsapp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input id="email" type="text" class="font-weight-bold text-dark lead" name="picpay" value="{{ old('picpay') }}"
                required autocomplete="picpay" autofocus placeholder="Conta PicPay">
            
            @error('picpay')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <p class="lead font-weight-bold text-left mb-2 mt-3 text-dark">CREDENCIAIS DE ACESSO</p><hr>

            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Senha">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" class="" name="password_confirmation" required
                autocomplete="new-password" placeholder="Repita a Senha">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="form-check text-dark text-left">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" style="width: 15 !important" required="">
                <label class="form-check-label lead" for="defaultCheck1">
                    Eu aceito os Termos de Usuário. <a href="#" data-toggle="modal" data-target="#termo_user_modal">Ver aqui</a>
                </label>
            </div>

            <button type="submit" class="action-button animate blue btn-block mt-3">{{ __('Cadastrar') }}</button>
            <p class="message text-dark">Já é filiado? <a href="#">Faça Login.</a></p>
        </form>



        <form lass="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <p class="lead font-weight-bold text-left mb-2 mt-3 text-dark">INSIRA SEU USUARIO E SENHA</p><hr>
            <input id="email" type="text" class="@error('usuario') is-invalid @enderror" name="usuario"
                value="{{ old('usuario') }}" required autocomplete="usuario" autofocus placeholder="Usuário.">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password" placeholder="Senha">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button type="submit" class="action-button animate green btn-block">{{ __('Login') }}</button>
            <p class="message text-dark py-3">Ainda não é filiado? <a href="#">Crie sua Conta.</a></p>
        </form>
    </div>
</div>


<footer class="footer shadow-lg border-top border-light">
    <div class="links text-right row justify-content-right clearfix" id="footer">
        <a href="/" class="text-light font-weight-bold" style="color: white !important">VOLTAR PARA O SITE</a>
        {{-- <a href="#" class="">Lorem Ipsum</a>
        <a href="#" class="">Lorem Ipsum</a> --}}
    </div>
    <div class="text-right">
        <i class="fas fa-handshake fa-2x text-shadow shadow-sm border border-dark"></i>
    </div>
    <div class="clearfix"></div>
</footer>


<!-- <footer class="footer border-top border-dark p-5 bg-light text-dark font-montserrat">
    <div class="links text-center row justify-content-center clearfix" id="footer">
        <a href="#" class="">Lorem Ipsum</a>
        <a href="#" class="">Lorem Ipsum</a>
        <a href="#" class="">Lorem Ipsum</a>
    </div>
    <div class="text-right">
        <i class="fas fa-handshake fa-2x text-shadow shadow-sm border border-dark"></i>
    </div>
    <div class="clearfix"></div>
</footer> -->


<script>
    $('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>

@include('user.features.modal_termo_user')

@endsection