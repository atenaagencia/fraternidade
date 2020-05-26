@extends('layouts.user')


@section('header')

<link rel="stylesheet" type="text/css" href="{{asset('css/alerts.css')}}">

<header class="mb-5 p-4" style="background: url(https://pcbx.us/bexy.jpg);">
    <div class="container-fluid">
        <div class="row pt-2">
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 mt-3 mb-3">
                <h1 class="text-light py-1">
                    <b class="text-uppercase font-weight-bold">{{Auth::user()->nome}}</b>
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

    

    @if(Auth::user()->status == "ativo")
        @if(isset(Auth::user()->fila->tipo) == 1)
        <div class="container-fluid">
            <div class="col-md-12">
                <h1 class="font-weight-bold display-4 text-center text-light">Você está na fila:
                    {{Auth::user()->fila->tipo}}</h1>
                    <h3 class="font-weight-bold display-4 text-center text-light">Sua posição é:
                        {{Auth::user()->fila->posicao.'º'}}</h3>
                <p class="lead text-center font-weight-bold text-light py-3">Faltam {{niveis(Auth::user()->fila->tipo)->quantidade - Auth::user()->cont_deposito}} depósitos para você ir para a
                    próxima fila.</p>
                <div class="card bg-transparent mb-4">
                    <!-- <div class="card-header bg-transparent">
                        <h1 class="text-light">Progresso</h1>
                    </div> -->
                    {{-- <div class="card-body bg-transparent">
                        <!-- <h1 class="font-weight-bold pb-3 py-3 text-center text-light">Você está na fila: 1</h1>
                        <p class="lead text-center">Faltam 04 depósitos para você ir para a próxima fila.</p> -->
                        <div class="bd-example p-4">
                            <div class="progress mb-3" style="height: 1px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="5">50%</div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        @endif
    @endif

</header>

@if(Auth::user()->status == "pendente")
    
    <div class="container mx-auto text-center m-5">
        @include('user.features.aviso_fila')
    </div>
@endif

@endsection

@section('content')

@if(Auth::user()->nivel_id == 1)

    @if(Auth::user()->status == "pendente")    
         @include('user.features.transacao.d01') 
    @elseif(Auth::user()->status == "ativo")
        @include('user.features.transacao.r01')
    @endif
@endif
@if(Auth::user()->nivel_id == 2)

    @if(Auth::user()->status == "pendente")
        @include('user.features.transacao.d02')
    @elseif(Auth::user()->status == "ativo")
        @include('user.features.transacao.r02')

    @endif
@endif

@if(Auth::user()->nivel_id == 3)

@if(Auth::user()->status == "pendente")
@include('user.features.transacao.d03')
@elseif(Auth::user()->status == "ativo")
@include('user.features.transacao.r03')

@endif
@endif

@endsection