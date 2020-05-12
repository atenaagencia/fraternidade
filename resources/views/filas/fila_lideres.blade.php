<style>
.page-header .page-header-content {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
}
</style>

@section('header')

<link rel="stylesheet" type="text/css" href="{{asset('css/alerts.css')}}">

<!-- <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary" style="background: url(https://pcbx.us/bexy.jpg);"> -->
<div class="page-header page-header-dark" style="background: url(https://pcbx.us/bexy.jpg);">
    <div class="container-fluid">
        <div class="page-header-content row">
            <div class="col-lg-4 m-3">
                <h1 class="page-header-title">
                    <span>Filas Líderes</span>
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

            {{--@if(Auth::user()->status == "inativo")
            <div class="container-fluid mx-auto text-center">
                @include('user.features.aviso_ativacao')
            </div> 
            @endif--}}
        
        </div>

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

<div class="container-fluid mt-n10">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-user-secondary">
                            <h1 class="text-light">Doações Iniciais</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Posição</th>
                                            <th>Nome</th>
                                            <th>Doação</th>
                                            <th>Comprovantes Bancários</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fila as $filiado)
                                                                                 
                                        <tr>
                                        <td>{{$filiado->posicao}}</td>
                                        <td>{{$filiado->user->nome}}</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-dark" {{($filiado->posicao ==1) ? '' : 'disabled'}} data-toggle="modal" data-target="#exampleBanco{{$filiado->id}}"><i
                                                class="fas fa-hand-holding-usd mr-3"></i>Depositar</button>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar"
                                                    aria-label="Toolbar with button groups">
                                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"><i
                                                                class="fa fa-eye mr-4"></i>Ver</button>
                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"><i
                                                                class="far fa-share-square mr-4"></i> Enviar</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-success">Liberado</div>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar"
                                                    aria-label="Toolbar with button groups">
                                                    <div class="btn-group" role="group" aria-label="First group">
                                                        <a class="btn btn-success text-light" data-toggle="modal"
                                                            data-target="#exampleWhatsapp"><i
                                                                class="fab fa-whatsapp"></i></a>
                                                        <a class="btn btn-primary"
                                                            href="mailto:{{Auth::user()->email}}?subject= WINHAPPY - LoremIpsum&body=Caro {{Auth::user()->nome}},"
                                                            target="blank"><i class="far fa-paper-plane"></i></a>
                                                        <a class="btn btn-primary" href="#" data-toggle="modal"
                                                            data-target="#exampleContato"><i
                                                                class="fas fa-phone"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            <form  action="{{route('filas.destroy',$filiado->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit">Deletar</button>
                                            </form>
                                            </td>
                                        </tr>
                                        {{-- @include('user.features.modal_banco') --}}
                                      @endforeach
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