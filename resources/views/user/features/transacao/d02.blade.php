@inject('transacao', 'App\Transacao')
@php
$d02_dep = $transacao->where('origem_id', 2)->where('remetente_id',Auth::user()->id)->where('status','<>','liberado')->get();
@endphp
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
                                            <th>Nome</th>
                                            <th>Doação</th>
                                            <th>Comprovantes Bancários</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach ($d02_dep as $filiado)

                                        <tr>
                                          
                                            <td>{{$filiado->destinatario->nome}}</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-dark" data-toggle="modal"
                                                    data-target="#exampleBanco{{$filiado->id}}"><i
                                                        class="fas fa-hand-holding-usd mr-3"></i>Depositar</button>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar"
                                                    aria-label="Toolbar with button groups">
                                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                                      @if(isset($filiado->arquivo))
                                                    <a href="{{route('download',$filiado->id)}}" type="button" class="btn btn-outline-dark btn-sm m-1" ><i
                                                                class="fa fa-eye mr-4"></i>Ver</a>
                                                    @endif

                                                        <button type="button" class="btn btn-outline-dark btn-sm m-1"
                                                            data-toggle="modal"
                                                            data-target="#exampleArquivo{{$filiado->id}}"><i
                                                                class="far fa-share-square mr-4"></i>
                                                                @if(isset($filiado->arquivo)) 
                                                                Reenviar
                                                                @else
                                                                Enviar
                                                                @endif
                                                                
                                                            </button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            <div class="badge badge-warning">{{$filiado->status}}</div>
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar"
                                                    aria-label="Toolbar with button groups">
                                                    <div class="btn-group" role="group" aria-label="First group">
                                                    <a href="https://api.whatsapp.com/send?phone=55{{$filiado->destinatario->whatsapp}}" class="btn btn-success text-light" target="_blank"><i
                                                                class="fab fa-whatsapp"></i></a>
                                                        <a class="btn btn-primary"
                                                            href="mailto:{{$filiado->destinatario->email}}?subject= WINHAPPY - LoremIpsum&body=Caro {{Auth::user()->nome}},"
                                                            target="blank"><i class="far fa-paper-plane"></i></a>
                                                        <a class="btn btn-primary" href="#" data-toggle="modal"
                                                            data-target="#exampleContato{{$filiado->id}}"><i
                                                                class="fas fa-phone"></i></a>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        @include('user.features.modal_banco')
                                        @include('user.features.modal_arquivo')
                                        @include('user.features.modal_contato')
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    @if(count($d02_dep) == 0)
                                    <a href="/iniciar/{{Auth::user()->nivel_id}}" class="btn btn-success btn-block py-3"> Atualizar lista de depósito</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--col--12-->
    </div>
</div>