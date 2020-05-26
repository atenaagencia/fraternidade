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
                <h1 class="text-light py-1">Dados Bancários</h1>
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

<div class="container-fluid mx-auto text-center mt-5">
<h1 class="page-header-title text-dark">
    <span>Insira ou edite seus dados abaixo.</span>
</h1>
</div>

<div class="container-fluid m-0 mt-5">
    <div class="col-12 m-0">
        <div class="card border-0 mb-4 m-0">
            <div class="card-body m-0">
                @if (!empty(old('mensagem')) )
                <div class="alert alert-danger">
                    {{old('mensagem')}}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Titular</th>
                                <th>Cpf</th>
                                <th>Banco</th>
                                <th>Agência</th>
                                <th>Conta</th>
                                <th>Tipo</th>
                                <th colspan="2">Ações</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banco as $info)
                    
                            <tr>
                                <td>{{$info->nome_completo}}</td>                                   
                                <td>{{$info->cpf}}</td>
                                <td>{{$info->banco}}</td>
                                <td>{{$info->agencia}}</td>
                                <td>{{$info->conta}}</td>
                                <td>{{$info->tipo_conta}}</td>
                            <td><a class="btn btn-dark" href="{{route('banco.edit', $info->id)}}"><i class="fa fa-eye"></i></a></td>
                            <td>
                                {{ Form::open(['route' => ['banco.destroy',$info->id]]) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                            <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i></button>
                                {{ Form::close() }}
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--table-responsive-->

                <div class="col-md-12 text-center">
                    <a href="{{route('banco.create')}}" class="btn btn-success" ><i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection