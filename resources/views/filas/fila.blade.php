
<div class="container-fluid">
    <div class="col-12">
        <div class="card border-0 mb-4 rounded-0">
            <div class="card-header rounded-0 bg-user-secondary">
            <h1 class="text-light">Nivel {{$nivel}}</h1>
            </div>
            <div class="card-body rounded-0">
                <div class="mb-3">
                    <a href="" data-toggle="modal" data-target="#fila" class="btn btn-success"><i class="fa fa-plus"></i></a>
                    <a href="" data-toggle="modal" data-target="#pesquisa" class="btn btn-info"><i class="fa fa-search"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th>Posição</th>
                                <th>Usuario</th>
                                <th>Nome</th>
                                <th>Doação Recebidas</th>
                                <th>Doações Liberadas</th>
                                @if(Auth::user()->perfil == 'adm')
                                    <th colspan="2">Ações</th>  
                                @endif
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fila as $filiado)
                                                                        
                            <tr>
                            <td>{{$filiado->posicao}}</td>
                            <td>{{}} <br> <small>{{$filiado->user->status}}<small></td>
                            <td>{{$filiado->user->nome}}</td>
                            <td>{{$filiado->cont_receber}}</td>
                            <td>{{$filiado->contador}}</td>
                                @if(Auth::user()->perfil == 'adm') 
                            <td><a href="{{route('cadastro.show',$filiado->user->id)}}?nivel={{$nivel}}" class="btn btn-info"><i class="fa fa-user"></i></a></td>
                                <td>
                                <form  action="{{route('filas.destroy',$filiado->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mx-auto">
                    {{$fila->links('vendor.pagination.bootstrap-4',['nivel' => $nivel])}}
                </div>
            </div>
        </div>
    </div>
</div>

@include('filas.features.modal_fila')