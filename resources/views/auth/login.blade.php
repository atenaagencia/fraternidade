@extends('layouts.win-happy')

<link href="{{ asset('css/login-page.css') }}" rel="stylesheet">

@section('content')

<div class="font-montserrat text-center py-3">
    <h1><i class="fas fa-handshake text-light mr-4"></i>Login</h1>
</div>

<div class="login-page">
    <div class="form">
        <form class="register-form" method="POST" action="{{ route('register') }}">
            @csrf

            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="nome"
                value="{{ old('nome') }}" required autocomplete="nome" autofocus placeholder="Nome">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="email" type="text" class="" name="telefone" value="{{ old('telefone') }}" required
                autocomplete="telefone" autofocus placeholder="Telefone">
            <input id="email" type="text" class="" name="whatsapp" value="{{ old('whatsapp') }}" required
                autocomplete="whatsapp" autofocus placeholder="Whatsapp">

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

            <button type="submit" class="action-button animate blue btn-block">{{ __('Cadastrar') }}</button>
            <p class="message text-dark">Já é filiado? <a href="#">Faça Login.</a></p>
        </form>



        <form lass="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

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


<footer class="footer shadow-lg">
    <div class="links text-center row justify-content-center clearfix" id="footer">
        <a href="#" class="">Lorem Ipsum</a>
        <a href="/" class="text-light font-weight-bold" style="color: white !important">INICIO</a>
        <a href="#" class="">Lorem Ipsum</a>
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
@endsection