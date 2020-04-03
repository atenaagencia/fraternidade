@extends('layouts.user')

@section('header')

<!-- <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary" style="background: url(https://pcbx.us/bexy.jpg);"> -->
<div class="page-header pb-10 page-header-dark bg-dark mb-3" style="background: url(https://pcbx.us/bexy.jpg);">
    <div class="container-fluid">
        <div class="page-header-content row">
            <div class="col-lg-9">
                <h1 class="page-header-title">
                    <span>Bem vindo, <b class="text-uppercase">{{Auth::user()->name}}</b></span>
                </h1>
                <div class="page-header-subtitle">
                    <div class="badge badge-warning font-weight-bold text-dark">Afiliado gold</div>
                </div>
            </div>
            <div class="col-lg-3 row justify-content-right ml-auto">
                <h2 class="mr-3 text-light">Saldo Disponível:</h2>
                <div class="page-header-subtitle">
                    <span class=" badge badge-success"><h4 class="font-weight-bold text-light">R$ 0.000,00</h4></span>
                </div>
            </div>
        </div>
    </div>
    @include('user.features.aviso_ativacao')
</div>
@endsection

@section('content')



<div class="container-fluid mt-n10">
    <div class="col-12">
        <div class="row">
            <div class="col-md-5">
                <div class="card border-0 mb-4">
                    <div class="card-header bg-user-info">
                        <h1 class="text-light">Instruções</h1>
                    </div>
                    <div class="card-body">
                        <h1 class="font-weight-bold pb-3 text-left">Como Participar:</h1><hr>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <i class="fa fa-star"></i>Primeiro Passo: Lorem Ipsum
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fa fa-star"></i>Segundo Passo: Lorem Ipsum
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <i class="fa fa-star"></i>Terceiro Passo: Lorem Ipsum
                                <span class="badge badge-primary badge-pill">3</span>
                            </li>
                        </ul>
                        <div class="btn btn-success col-8 offset-2 py-3 mt-4 btn-block font-weight-bold">Começar agora</div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">DataTable Example</div>
                        <div class="card-body">
                            <div class="datatable table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                            <td>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card border-0 mb-4">
                    <!-- <div class="card-header bg-user-info">
                        <h1 class="text-light">Progresso</h1>
                    </div> -->
                    <div class="card-body bg-user-info">
                        <h1 class="font-weight-bold pb-3 py-3 text-center text-light">Você está na fila: 1</h1>
                        <p class="lead text-center">Faltam 04 depósitos para você ir para a próxima fila.</p>
                        <div class="bd-example p-4">
                        <div class="progress mb-3" style="height: 1px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                        </div>
                        <div class="btn btn-primary col-8 offset-2 py-3 mt-4 btn-block font-weight-bold">Ver Depósitos</div>
                    </div>
                </div>
            </div>
        </div><!--col--12-->
    </div>
</div>


@endsection
