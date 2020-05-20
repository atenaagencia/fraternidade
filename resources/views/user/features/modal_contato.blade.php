<div class="modal fade" id="exampleContato{{$filiado->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleContatoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleContatoLabel">Informações de Contato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <span class="badge badge-dark float-right">{{$filiado->destinatario->usuario}}</span>
        <h1 class="font-weight-bold pb-3 text-left modal-title" id="exampleContatoLabel">{{$filiado->destinatario->nome}}</h1>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
               Telefone 01: <span class="ml-auto font-weight-bold">{{$filiado->destinatario->telefone}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
               Telefone 02 (whatsapp): <span class="ml-auto font-weight-bold">{{$filiado->destinatario->whatsapp}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
               Email: <span class="ml-auto font-weight-bold">{{$filiado->destinatario->email}}</span>
            </li>
        </ul>
      </div>
    </div>
  </div>
</div>