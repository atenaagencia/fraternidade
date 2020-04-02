@extends('layouts.user')

@section('header')
<!-- <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary" style="background: url(https://pcbx.us/bexy.jpg);"> -->
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
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
                    <span class=" badge badge-success"><h4 class="font-weight-bold text-light">R$ 199.000,00</h4></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

@include('user.features.aviso_ativacao')

<div class="container-fluid mt-n10">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">Area Chart Example</div>
                <div class="card-body">
                    <!-- <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div> -->
                </div>
            </div>
        </div>
    </div>
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
@endsection
