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
                <h1 class="text-light">Lista Usuários</h1>
            </div>
            <div class="card-body rounded-0">
                @if(old('m_reset'))
                <div class="alert alert-success">
                    {{old('m_reset')}}
                </div>
                @endif
                <div class="mb-3">
                    <a href="" data-toggle="modal" data-target="#cadastro" class="btn btn-success"><i class="fa fa-user-plus"></i></a>
                    <a href="" data-toggle="modal" data-target="#pesquisa" class="btn btn-info"><i class="fa fa-search"></i></a>
                </div>

                @if (!empty(old('mensagem')) )
                <div class="alert alert-danger">
                    {{old('mensagem')}}
                </div>

                @endif
                <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-dark">Nome</th>
                            <th class="text-dark">Usuário</th>
                            <th class="text-dark">Saldo</th>
                            <th class="text-dark">Nivel</th>
                            <th class="text-dark">Recebimentos</th>
                            <th class="text-dark">Status</th>
                            <th class="text-dark">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuario as $filiado)
                        <tr>
                        <td>{{$filiado->nome}}</td>
                        <td>{{$filiado->usuario}}</td>
                        <td>{{$filiado->saldo}}</td>
                        <td>{{$filiado->nivel_id}}</td>
                        <td>{{$filiado->cont_deposito}}</td>
                        <td>{{$filiado->status}}</td>
                        <td>
                        <a href="{{route('cadastro.edit',$filiado->id)}}" class="btn btn-outline-dark" style="font-size: 10px">
                            <i class="fa fa-edit"></i>
                            </a>
                        <a href="{{route('cadastro.show',$filiado->id)}}" class="btn btn-outline-dark" style="font-size: 10px"><i class="fa fa-eye"></i></a>
                        <a href="#" data-toggle="modal" data-target="#altSenha{{$filiado->id}}"class="btn btn-warning" style="font-size: 10px"><i
                                class="fa fa-key"></i></a>
                        </td>
                        </tr>  
                        @include('user.features.modal_resetarsenha')
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            <div class="mx-auto">{{$usuario->links('vendor.pagination.cadastros')}}</div>
        </div>
    </div>
</div>


<div class="modal fade" id="cadastro" tabindex="-1" role="dialog"
    aria-labelledby="exampleContatoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleContatoLabel">Formulario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('user.forms.form_user')
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pesquisa" tabindex="-1" role="dialog" aria-labelledby="exampleContatoLabel"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleContatoLabel">Pesquisa usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'cadastro.index', 'method'=> 'GET']) !!}
                {!! Form::text('pesquisa', '', ['class'=>'form-control', 'placeholder' =>'Informe Nome ou Username' ]) !!}
                {!! Form::submit('Pesquisar', ['class'=>['btn', 'btn-success','btn-block','mt-2']]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection