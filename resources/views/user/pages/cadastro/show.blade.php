@extends('layouts.user')

<style>
    .page-header .page-header-content {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
    }
</style>
@section('header')

<link rel="stylesheet" type="text/css" href="{{asset('css/alerts.css')}}">


<div class="page-header page-header-dark" style="background: url(https://pcbx.us/bexy.jpg);">
    <div class="container-fluid">
        <div class="page-header-content row">
            <div class="col-lg-4 m-3">
                <h1 class="page-header-title">
                    <span>Cadastro de Usuário</span>
                </h1>
            </div>

            <div class="col-lg-3 row justify-content-right ml-auto m-3">

                <div class="col-sm-12">
                    <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                        <i class="start-icon far fa-check-circle faa-tada animated"></i>
                        <strong class="font-weight-bold">Saldo Disponível:</strong> <b>R$ {{Auth::user()->saldo}}</b>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>
@endsection

@section('content')


<div class="container-fluid mt-5">
    <div class="col-12 ">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card border-0 mb-4">
                         <div class="card-header bg-user-secondary">
                            <h1 class="text-light">Perfil de Usuário</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                              @if(Auth::user()->perfil == 'adm')
                            <a href="{{route('cadastro.index')}}"  class="btn btn-success"><i class="fa fa-arrow-left"></i></a>
                            </div>
                            @endif

                         
                            <div>
                               
                            {!! Form::model($user,['class'=>'user','route' => ['cadastro.update',$user->id]]) !!}
                            @method('PUT')
                            
                            <div class="form-group row">
                                {!! Form::hidden('user_id', Auth::user()->id, ['']) !!}
                                <div class="container-fluid font-weight-bold">
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

        </div>
        <!--col--12-->
    </div>
</div>




@endsection