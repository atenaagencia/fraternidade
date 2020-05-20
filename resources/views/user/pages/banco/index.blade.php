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
                    <span>Dados Bancários</span>
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

            {{--
                @if(Auth::user()->status == "inativo")
                <div class="container-fluid mx-auto text-center">
                    @include('user.features.aviso_ativacao')
                </div> 
                @endif
            --}}
        
        </div>

        {{--
        @if(Auth::user()->status == "ativo")
        <div class="container-fluid">
            <div class="col-md-12">
                <h1 class="font-weight-bold display-4 text-center text-light">Você está na fila: 1</h1>
                <p class="lead text-center font-weight-bold text-light py-3">Faltam 02 depósitos para você ir para a
                    próxima fila.</p>
                <div class="card bg-transparent mb-4">
                    <!-- <div class="card-header bg-transparent">
                        <h1 class="text-light">Progresso</h1>
                    </div> -->
                    <div class="card-body bg-transparent">
                        <!-- <h1 class="font-weight-bold pb-3 py-3 text-center text-light">Você está na fila: 1</h1>
                        <p class="lead text-center">Faltam 04 depósitos para você ir para a próxima fila.</p> -->
                        <div class="bd-example p-4">
                            <div class="progress mb-3" style="height: 1px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        --}}
        
    </div>

</div>
@endsection

@section('content')

<div class="container-fluid mx-auto text-center mt-5">
<h1 class="page-header-title text-dark">
    <span>Insira ou edite seus dados abaixo.</span>
</h1>
</div>

<div class="container-fluid mt-5">
    <div class="col-12 ">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card border-0 mb-4">
                        <!-- <div class="card-header bg-user-secondary">
                            <h1 class="text-light">Dados Bancarios</h1>
                        </div> -->
                        <div class="card-body">
                          
                            @if (!empty(old('mensagem')) )
                            <div class="alert alert-danger">
                                {{old('mensagem')}}
                            </div>

                            @endif
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
                        <div class="col-md-12 text-center">
                        <a href="{{route('banco.create')}}" class="btn btn-success" ><i class="fa fa-plus"></i></a>
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