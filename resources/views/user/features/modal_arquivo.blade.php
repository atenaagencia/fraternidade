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
        <h1 class="font-weight-bold pb-3 text-left modal-title" id="exampleContatoLabel">{{$filiado->destinatario->nome}}</h1>

        {!! Form::open(['url'=>'set_arquivo', 'files' => true]) !!}
        {!! Form::hidden('t_id', $filiado->id, []) !!}
        {!! Form::label('Valor:', []) !!}
        @if($filiado->destinatario->usuario == 'sistema')
        {!! Form::number('valor', 20, ['class'=>'form-control', 'readonly']) !!}
        @else
        {!! Form::number('valor', niveis(Auth::user()->nivel_id)->valor_deposito, ['class'=>'form-control', 'readonly']) !!}
        @endif
        {!! Form::file('arquivo', ['class'=>['form-control','mt-2'],'required']) !!}
        {!! Form::submit('Enviar', ['class'=>['btn', 'btn-success','btn-block','mt-2']]) !!}
        {!! Form::close() !!}        
      </div>
    </div>
  </div>
</div>