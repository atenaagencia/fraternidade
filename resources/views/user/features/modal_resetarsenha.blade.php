<div class="modal fade" id="altSenha{{$filiado->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleContatoLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleContatoLabel">Resetar senha: {{$filiado->nome}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1 class="font-weight-bold pb-3 text-left modal-title" id="exampleContatoLabel">
                    Deseja resetar senha do usuário?
                </h1>

                {!! Form::open(['route'=>['upSenha', $filiado->id],'class'=>'user']) !!}
                {!! Form::hidden('resetar', '1', ['']) !!}
                {!! Form::hidden('password', '1234', []) !!}
                {!! Form::submit('resetar', ['class'=>['btn', 'btn-success','btn-block','mt-2']]) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>