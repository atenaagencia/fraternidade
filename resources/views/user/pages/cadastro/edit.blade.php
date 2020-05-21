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
                            <h1 class="text-light">Perifl de Usuário</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                            <a href="{{route('cadastro.index')}}"  class="btn btn-success"><i class="fa fa-arrow-left"></i></a>
                            </div>

                         
                            <div>
                               
                               @include('user.forms.form_user')  
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