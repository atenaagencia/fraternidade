@inject('transacao', 'App\Transacao')
@php
$r01_dep = $transacao->where('origem_id', 1)->where('destinatario_id',Auth::user()->id)->get();

$espera = count($r01_dep);
@endphp
<div class="container-fluid  ">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-user-secondary">
                            <h1 class="text-light">Recebimentos</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover text-center" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Valor</th>
                                            <th>Comprovantes Bancários</th>
                                            <th>Status</th>
                                            <th>Contato</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                                @foreach ($r01_dep as $filiado)

                                                <tr>

                                                    <td>{{$filiado->remetente->nome}}</td>
                                                    <td>
                                                        @if($filiado->status == 'aguardando')
                                                        <div class="badge badge-warning">{{$filiado->status}}</div>
                                                        @else
                                                        R$ {{$filiado->valor}}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($filiado->status == 'aguardando')
                                                        <div class="badge badge-warning">{{$filiado->status}}</div>
                                                        @else
                                                        <div class="btn-toolbar" role="toolbar"
                                                            aria-label="Toolbar with button groups">
                                                            <div class="btn-group mr-2" role="group"
                                                                aria-label="First group">
                                                                @if(isset($filiado->arquivo))
                                                                <a href="{{route('download',$filiado->id)}}"
                                                                    type="button"
                                                                    class="btn btn-outline-dark btn-sm m-1"><i
                                                                        class="fa fa-eye mr-4"></i>Ver</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-warning">{{$filiado->status}}</div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-toolbar" role="toolbar"
                                                            aria-label="Toolbar with button groups">
                                                            <div class="btn-group" role="group"
                                                                aria-label="First group">
                                                                <a href="https://api.whatsapp.com/send?phone=55{{$filiado->destinatario->whatsapp}}"
                                                                    class="btn btn-success text-light"
                                                                    target="_blank"><i class="fab fa-whatsapp"></i></a>
                                                                <a class="btn btn-primary"
                                                                    href="mailto:{{$filiado->destinatario->email}}?subject= WINHAPPY - LoremIpsum&body=Caro {{Auth::user()->nome}},"
                                                                    target="blank"><i
                                                                        class="far fa-paper-plane"></i></a>
                                                                <a class="btn btn-primary" href="#" data-toggle="modal"
                                                                    data-target="#exampleContato{{$filiado->id}}"><i
                                                                        class="fas fa-phone"></i></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if($filiado->status == 'aguardando')
                                                        <div class="badge badge-warning">{{$filiado->status}}</div>
                                                        @elseif($filiado->status == 'pendente')
                                                        {!! Form::open(['route'=>'liberar01']) !!}
                                                        {!! Form::hidden('transacao_id', $filiado->id, []) !!}
                                                        {!! Form::hidden('user_id', Auth::user()->id, []) !!}
                                                        {!! Form::submit('Liberar', ['class'=>['btn','btn-success']])
                                                        !!}
                                                        {!! Form::close() !!}
                                                        @endif

                                                    </td>

                                                </tr>
                                                @include('user.features.modal_banco')
                                                @include('user.features.modal_arquivo')
                                                @include('user.features.modal_contato')
                                                @endforeach
                                                @if( $espera == 0)
                                                @for ($i = 0; $i < niveis(Auth::user()->nivel_id)->quantidade; $i++)
                                                    <tr>
                                                        <td><i class="fa fa-user"></i></td>
                                                        <td>
                                                            <div class="badge badge-warning">Aguardando</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-warning">Aguardando</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-warning">Aguardando</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-warning">Aguardando</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-warning">Aguardando</div>
                                                        </td>
                                                
                                                    </tr>
                                                    @endfor
                                                    @elseif($espera > 0)
                                                    @for ($i = 0; $i < niveis(Auth::user()->nivel_id)->quantidade - $espera;
                                                        $i++)
                                                        <tr>
                                                            <td><i class="fa fa-user"></i></td>
                                                            <td>
                                                                <div class="badge badge-warning">Aguardando</div>
                                                            </td>
                                                            <td>
                                                                <div class="badge badge-warning">Aguardando</div>
                                                            </td>
                                                            <td>
                                                                <div class="badge badge-warning">Aguardando</div>
                                                            </td>
                                                            <td>
                                                                <div class="badge badge-warning">Aguardando</div>
                                                            </td>
                                                            <td>
                                                                <div class="badge badge-warning">Aguardando</div>
                                                            </td>
                                                
                                                        </tr>
                                                        @endfor
                                                        @endif
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