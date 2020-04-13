@extends('layouts.user')

@section('content')
<div class="container-fluid mt-5">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-user-secondary">
                            <h1 class="text-light">Dados Bancarios</h1>
                        </div>
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--col--12-->
    </div>
</div>

@endsection