<div class="container-fluid mt-n10">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-user-secondary">
                            <h1 class="text-light">Fila Lideres</h1>
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
                                                <button class="btn btn-sm btn-outline-dark" ><i
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
                                           
                                        </tr>
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