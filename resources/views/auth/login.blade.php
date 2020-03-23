@extends('layouts.login-fraternidade')

<link href="{{ asset('css/login-page.css') }}" rel="stylesheet">
@section('content')

<div class="font-montserrat text-center py-3">
    <h1><i class="fas fa-handshake text-shadow shadow-sm border"></i>Login</h1>
</div>

<div class="login-page">
  <div class="form">             
    <form class="register-form" method="POST" action="{{ route('register') }}">
    @csrf

    <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Senha">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input id="password" type="password" class="" name="password_confirmation" required autocomplete="new-password" placeholder="Repita a Senha">
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
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email ou CPF">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">

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

<script>
    $('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
@endsection


