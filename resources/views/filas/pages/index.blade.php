@extends('layouts.user')

<style>
.page-header .page-header-content {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
}
</style>
<style>
    .page-header .page-header-content {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
    }
</style>

@section('header')

<link rel="stylesheet" type="text/css" href="{{asset('css/alerts.css')}}">

<!-- <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary" style="background: url(https://pcbx.us/bexy.jpg);"> -->
<div class="page-header page-header-dark" style="background: url(https://pcbx.us/bexy.jpg);">
    <div class="container-fluid">
        <div class="page-header-content row">
            <div class="col-lg-4 m-3">
                <h1 class="page-header-title">
                    <span>Filas</span>
                </h1>
            </div>

            <div class="col-lg-3 row justify-content-right ml-auto m-3">

                <div class="col-sm-12">
                    <div
                        class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                        <i class="start-icon far fa-check-circle faa-tada animated"></i>
                        <strong class="font-weight-bold">Saldo Disponível:</strong> <b> <br>R$
                            {{Auth::user()->saldo}}</b>
                    </div>
                </div>
            </div>

            {{--
            @if(Auth::user()->status == "inativo")
            <div class="container-fluid mx-auto text-center">
                @include('user.features.aviso_ativacao')
            </div> 
            @endif
            --}}

        </div>

     
    </div>

</div>
<div class="container" style="padding-left: 60px;padding-right: 60px; padding-top: 30px;">
<h1>Você está na fila {{$nivel}}</h1>
    <div class="row">
        <div class="col">
        <a href="{{route('filas.index')}}?nivel=1" class="btn btn-info btn-block">Nivel 01</a>
        </div>
        <div class="col">
        <a href="{{route('filas.index')}}?nivel=2" class="btn btn-info btn-block">Nivel 02</a>
        </div>
        <div class="col">
           <a href="{{route('filas.index')}}?nivel=3" class="btn btn-info btn-block">Nivel 03</a>
        </div>
    </div>
</div>
@endsection


@section('content')
<div style="margin-top: 150px;">
    @include('filas.fila')
    
</div>
@endsection