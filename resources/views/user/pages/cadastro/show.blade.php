@extends('layouts.user')

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
                    @if(Auth::user()->perfil == 'adm')
                    @if(isset($_GET['nivel']))
                        <a href="/filas?nivel={{$_GET['nivel']}}" class="btn btn-success"><i class="fa fa-arrow-left"></i></a>
                        <a href="{{route('cadastro.edit',$user->id)}}" class="btn btn-info"><i  class="fa fa-edit"></i></a>
                    @else
                        <a href="{{route('cadastro.index')}}"  class="btn btn-success"><i class="fa fa-arrow-left"></i></a>
                    @endif
                </div>
                @endif
                
                <div>
                {!! Form::model($user,['class'=>'user','route' => ['cadastro.update',$user->id]]) !!}
                @method('PUT')
                
                <div class="form-group row">
                    {!! Form::hidden('user_id', Auth::user()->id, ['']) !!}
                    <div class="container-fluid py-4 font-weight-bold">
                        <h1>Informações Pessoais</h1>
                        <hr>
                    </div>
                    @if(Auth::user()->perfil == 'adm')
                    <div class="col-sm-6 mt-1">
                        {!! Form::label('', 'Nome Completo:', ['']) !!}
                        {!! Form::text('nome', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
                    </div>
                    <div class="col-sm-6 mt-1">
                        {!! Form::label('', 'Usuário:', ['']) !!}
                        {!! Form::text('usuario', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
                    </div>
                    @endif
                    <div class="col-sm-6 mt-1">
                        {!! Form::label('', 'E-mail:', ['']) !!}
                        {!! Form::text('email', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
                    </div>
                    <div class="col-sm-6 mt-1">
                        {!! Form::label('', 'Telefone:', ['']) !!}
                        {!! Form::text('telefone', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
                    </div>
                    <div class="col-sm-6 mt-1">
                        {!! Form::label('', 'WhatsApp:', ['']) !!}
                        {!! Form::text('whatsapp', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
                    </div>
                    <div class="col-sm-6 mt-1">
                        {!! Form::label('', 'Conta Picpay:', ['']) !!}
                        {!! Form::text('picpay', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
                    </div>
                    @if(Auth::user()->perfil == 'adm')
                    <div class="col-sm-6 mt-1">
                        {!! Form::label('', 'Saldo :', ['']) !!}
                        {!! Form::text('saldo', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
                    </div>
                    <div class="col-sm-6 mt-1">
                        {!! Form::label('', 'Nivel:', ['']) !!}
                        {!! Form::select('nivel_id', [''=>'---','1'=>'1','2'=>'2','3'=>'3'], $value=null, ['class'=>
                        ['form-control','form-control-user'],'required']) !!}
                    </div>
                    <div class="col-sm-6 mt-1">
                        {!! Form::label('', 'Doações Recebidas :', ['']) !!}
                        {!! Form::text('cont_deposito', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
                    </div>
                    <div class="col-sm-6 mt-1">
                        {!! Form::label('', 'Status:', ['']) !!}
                        {!! Form::select('status', [''=> '---','pendente'=>'pendente','ativo'=>'ativo'], $value=null, ['class'=>
                        ['form-control','form-control-user'],'required']) !!}
                    </div>
                    @endif
                    @if(Auth::user()->perfil == "user")
                    <div class="col-sm-12 mt-1">
                        {!! Form::submit('Salvar', ['class' => ['btn', 'btn-primary', 'btn-block', 'form-nonresize']]) !!}
                    </div>
                    @endif
                
                
                </div>
                
                
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>




@endsection