@extends('layouts.user')

@section('header')
<link rel="stylesheet" type="text/css" href="{{asset('css/alerts.css')}}">

<header class="mb-5 p-4" style="background: url(https://pcbx.us/bexy.jpg);">
    <div class="container-fluid">
        <div class="row pt-2">
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 mt-3 mb-3">
                <h1 class="text-light py-1">
                    <b class="text-uppercase font-weight-bold">Cadastro de Usuário</b>
                </h1>
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
@endsection

@section('content')
<div class="container-fluid mt-5">
    <div class="col-12 ">
        <div class="card rounded-0 border-0 mb-4">
                <div class="card-header rounded-0 bg-user-secondary">
                <h1 class="text-light">Perfil de Usuário</h1>
            </div>
            <div class="card-body rounded-0">
                <div class="mb-3">
                <a href="{{route('cadastro.index')}}"  class="btn btn-success"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="py-3">
                    @include('user.forms.form_user')  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection