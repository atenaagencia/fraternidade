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

<header class="mb-5 p-4" style="background: url(https://pcbx.us/bexy.jpg);">
    <div class="container-fluid">
        <div class="row pt-2">
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 mt-3 mb-3">
                <h1 class="text-light py-1">Filas</h1>
                <div class="page-header-subtitle">
                    <div class="badge badge-warning font-weight-bold text-dark">Afiliado gold</div>
                    <div class="badge badge-info font-weight-bold text-dark">Nivel: {{Auth::user()->nivel->id}}</div>
                    @if(Auth::user()->status == "pendente" || Auth::user()->status == "inativo")
                    <div class="badge badge-danger font-weight-bold text-light">{{Auth::user()->status}}</div>
                    @else
                    <div class="badge badge-success font-weight-bold text-light">{{Auth::user()->status}}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 mt-3 mb-3">
                <div class="p-2 alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__weight-light brk-library-rendered rendered show">
                    <i class="start-icon far fa-check-circle faa-tada animated"></i>
                    <strong class="font-weight-bold">Saldo Disponível:</strong> <b>R$ {{number_format(Auth::user()->saldo,2,',','.')}}</b>
                </div>
            </div>
        </div><!--row-->
    </div><!--container-fluid-->
</header>


<div class="container pl-5 pr-5" style="">
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
    @include('filas.fila')
@endsection