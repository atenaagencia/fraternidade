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
                        <strong class="font-weight-bold">Saldo Disponível:</strong> <b>R$ {{Auth::user()->saldo}}</b>.
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
    <span>Altere os dados abaixo.</span>
</h1>
</div>

<div class="container-fluid mt-5">
    <div class="col-10 offset-1">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card border-0 mb-4">
                        <!-- <div class="card-header bg-user-secondary">
                            <h1 class="text-light">Dados Bancarios</h1>
                        </div> -->
                        <div class="card-body">
                          
                          @include('user.forms.form_banco')
                       
                        </div>
                        
                    </div>
                   
                </div>
            </div>
          
        </div>
        <!--col--12-->
    </div>
</div>


@endsection