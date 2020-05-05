<div class="modal fade" id="exampleArquivo{{$filiado->id}}" tabindex="-1" role="dialog"
  aria-labelledby="exampleContatoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleContatoLabel">Comprovante Bancario Para:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1 class="font-weight-bold pb-3 text-left modal-title" id="exampleContatoLabel">{{$filiado->user->nome}}</h1>

        {!! Form::open() !!}
        {!! Form::file('arquivo', ['form-control']) !!}
        {!! Form::close() !!}        
      </div>
    </div>
  </div>
</div>