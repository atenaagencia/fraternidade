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
                            <h1 class="text-light">Lista Usuários</h1>
                        </div>
                        <div class="card-body">
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
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-dark">Nome</th>
                                        <th class="text-dark">Usuário</th>
                                        <th class="text-dark">Saldo</th>
                                        <th class="text-dark">Nivel</th>
                                        <th class="text-dark">Recebimentos</th>
                                        <th class="text-dark">Status</th>
                                        <th></th>
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
                                    <a href="{{route('cadastro.edit',$filiado->id)}}" class="btn btn-dark" style="font-size: 10px">
                                        <i class="fa fa-edit"></i>
                                        </a>
                                    <a href="{{route('cadastro.show',$filiado->id)}}" class="btn btn-dark" style="font-size: 10px"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#altSenha{{$filiado->id}}"class="btn btn-dark" style="font-size: 10px"><i
                                            class="fa fa-key"></i></a>
                                    </td>
                                    </tr>  
                                    @include('user.features.modal_resetarsenha')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    <div>{{$usuario->links('vendor.pagination.default')}}</div>
                    </div>

                </div>
            </div>

        </div>
        <!--col--12-->
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