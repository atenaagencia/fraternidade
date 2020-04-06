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