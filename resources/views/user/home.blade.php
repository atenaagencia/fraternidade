@extends('layouts.user')

@section('header')

<!-- <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary" style="background: url(https://pcbx.us/bexy.jpg);"> -->
<div class="page-header pb-10 page-header-dark bg-dark mb-3" style="background: url(https://pcbx.us/bexy.jpg);">
    <div class="container-fluid">
        <div class="page-header-content row">
            <div class="col-lg-4">
                <h1 class="page-header-title">
                    <span>Bem vindo, <b class="text-uppercase">{{Auth::user()->nome}}</b></span>
                </h1>

                <div class="page-header-subtitle">
                    <div class="badge badge-warning font-weight-bold text-dark">Afiliado gold</div>
                    @if(Auth::user()->status == "pendente" || Auth::user()->status == "inativo")
                    <div class="badge badge-danger font-weight-bold text-light">{{Auth::user()->status}}</div>
                    @else
                    <div class="badge badge-success font-weight-bold text-light">{{Auth::user()->status}}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-3 row justify-content-right ml-auto">
                <h2 class="mr-3 text-light">Saldo Disponível:</h2>
                <div class="page-header-subtitle">
                    <span class=" badge badge-success">
                        <h4 class="font-weight-bold text-light">R$ {{Auth::user()->saldo}}</h4>
                    </span>
                </div>
            </div>
        </div>
        @if(Auth::user()->status == "pendente")
        <div class="container-fluid mx-auto text-center">
            @include('user.features.aviso_ativacao')
        </div> 
        @endif
        
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
        
    </div>

</div>
@endsection

@section('content')

@if(Auth::user()->status == "ativo")

<div class="container-fluid mt-n10">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-user-secondary">
                            <h1 class="text-light">Depósitos</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Posição</th>
                                            <th>Nome | User</th>
                                            <th>Doação</th>
                                            <th>Comprovantes Bancários</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Philip | <span class="badge badge-dark">philldeveloper</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-dark" disabled><i class="fas fa-hand-holding-usd mr-3"></i>Depositar</button>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"><i class="fa fa-eye mr-4"></i>Ver</button>
                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"><i class="far fa-share-square mr-4"></i> Enviar</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-success">Liberado</div>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                    <div class="btn-group" role="group" aria-label="First group">
                                                        <a class="btn btn-success text-light" data-toggle="modal" data-target="#exampleWhatsapp"><i class="fab fa-whatsapp"></i></a>
                                                        <a class="btn btn-primary" href="mailto:{{Auth::user()->email}}?subject= WINHAPPY - LoremIpsum&body=Caro {{Auth::user()->nome}}," target="blank"><i class="far fa-paper-plane"></i></a>
                                                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleContato"><i class="fas fa-phone"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Herbet | <span class="badge badge-dark">Chefinho</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-hand-holding-usd mr-3"></i>Depositar</button>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"><i class="fa fa-eye mr-4"></i>Ver</button>
                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"><i class="far fa-share-square mr-4"></i> Enviar</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-danger">Bloqueado</div>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                    <div class="btn-group" role="group" aria-label="First group">
                                                        <a class="btn btn-success text-light" data-toggle="modal" data-target="#exampleWhatsapp"><i class="fab fa-whatsapp"></i></a>
                                                        <a class="btn btn-primary" href="mailto:{{Auth::user()->email}}?subject= WINHAPPY - LoremIpsum&body=Caro {{Auth::user()->nome}}," target="blank"><i class="far fa-paper-plane"></i></a>
                                                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleContato"><i class="fas fa-phone"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Itala | <span class="badge badge-dark">Chefinha</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-hand-holding-usd mr-3"></i>Depositar</button>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"><i class="fa fa-eye mr-4"></i>Ver</button>
                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"><i class="far fa-share-square mr-4"></i> Enviar</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-danger">Bloqueado</div>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                    <div class="btn-group" role="group" aria-label="First group">
                                                        <a class="btn btn-success text-light" data-toggle="modal" data-target="#exampleWhatsapp"><i class="fab fa-whatsapp"></i></a>
                                                        <a class="btn btn-primary" href="mailto:{{Auth::user()->email}}?subject= WINHAPPY - LoremIpsum&body=Caro {{Auth::user()->nome}}," target="blank"><i class="far fa-paper-plane"></i></a>
                                                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleContato"><i class="fas fa-phone"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Jeferson | <span class="badge badge-dark">Comercial</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-dark" disabled><i class="fas fa-hand-holding-usd mr-3"></i>Depositar</button>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"><i class="fa fa-eye mr-4"></i>Ver</button>
                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"><i class="far fa-share-square mr-4"></i> Enviar</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-success">Liberado</div>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                    <div class="btn-group" role="group" aria-label="First group">
                                                        <a class="btn btn-success text-light" data-toggle="modal" data-target="#exampleWhatsapp"><i class="fab fa-whatsapp"></i></a>
                                                        <a class="btn btn-primary" href="mailto:{{Auth::user()->email}}?subject= WINHAPPY - LoremIpsum&body=Caro {{Auth::user()->nome}}," target="blank"><i class="far fa-paper-plane"></i></a>
                                                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleContato"><i class="fas fa-phone"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--col--12-->
    </div>
</div>
@endif


@endsection