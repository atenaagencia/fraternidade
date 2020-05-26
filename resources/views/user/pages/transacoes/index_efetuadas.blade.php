@extends('layouts.user')

<style>
    .page-header .page-header-content {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
    }
</style>
@section('header')

<link rel="stylesheet" type="text/css" href="{{asset('css/alerts.css')}}">

@section('header')

<link rel="stylesheet" type="text/css" href="{{asset('css/alerts.css')}}">

<header class="mb-5 p-4" style="background: url(https://pcbx.us/bexy.jpg);">
    <div class="container-fluid">
        <div class="row pt-2">
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 mt-3 mb-3">
                <h1 class="text-light py-1">Minhas Transações</h1>
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
    <div class="col-12">
        <div class="card border-0 mb-4 rounded-0">
            <div class="card-header bg-user-secondary rounded-0">
                <h1 class="text-light">Depósitos efetuados</h1>
            </div>
            <div class="card-body rounded-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Comprovantes Bancários</th>
                                <th>Status</th>
                                {{-- <th>Contato</th> --}}
                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($t_efetuadas as $filiado)
            
                            <tr>
                                    <td>{{$filiado->created_at->format('d/m/Y')}} | {{$filiado->created_at->format('H:i')}}</td>   
                                <td>{{$filiado->destinatario->nome}}</td>
                                <td>
                                    @if($filiado->status == 'aguardando')
                                    <div class="badge badge-warning">{{$filiado->status}}</div>
                                    @else
                                    R$ {{$filiado->valor}}
                                    @endif
                                </td>
                                <td>
                                    
                                            <a href="{{route('download',$filiado->id)}}" type="button"
                                                class="btn btn-outline-dark btn-block btn-sm m-1"><i class="fa fa-eye mr-4"></i>Ver</a>
                                        
                                </td>
                                <td>
                                    <div class="badge badge-warning">{{$filiado->status}}</div>
                                </td>
                                {{-- <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <a href="https://api.whatsapp.com/send?phone=55{{$filiado->destinatario->whatsapp}}"
                                                class="btn btn-success text-light" target="_blank"><i
                                                    class="fab fa-whatsapp"></i></a>
                                            <a class="btn btn-primary"
                                                href="mailto:{{$filiado->destinatario->email}}?subject= WINHAPPY - LoremIpsum&body=Caro {{Auth::user()->nome}},"
                                                target="blank"><i class="far fa-paper-plane"></i></a>
                                            <a class="btn btn-primary" href="#" data-toggle="modal"
                                                data-target="#exampleContato{{$filiado->id}}"><i class="fas fa-phone"></i></a>
                                        </div>
                                    </div>
                                </td> --}}
            
                            </tr>
                            {{-- @include('user.features.modal_banco')
                            @include('user.features.modal_arquivo')
                            @include('user.features.modal_contato') --}}
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                <div class="text-center">
                    {{ $t_efetuadas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection