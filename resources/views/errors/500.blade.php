@extends('layouts.win-happy')

<link href="{{ asset('css/login-page.css') }}" rel="stylesheet">

<style>
    .form-check {
        position: relative !important;
        display: block !important;
        padding-left: 1.25rem !important;
    }

    input[type=checkbox],
    input[type=radio] {
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

<div class="font-montserrat text-center mt-5 py-4 mx-auto">
    <h1><i class="fas fa-handshake text-light mr-4 py-4"></i>Winhappy</h1><br>
</div>




<div class="login-page">
    <div class="form text-center">
    <h1 class="text-dark">Ops! Aconteceu algum problema.</h1>
    <h2 class="text-dark">Por favor Entre em contato com o suporte</h2>
    </div>
</div>



@endsection