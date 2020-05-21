<div class="modal fade" id="altSenha" tabindex="-1" role="dialog"
    aria-labelledby="exampleContatoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleContatoLabel">Alterar senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1 class="font-weight-bold pb-3 text-left modal-title" id="exampleContatoLabel">
                </h1>

                {!! Form::open(['route'=>['upSenha', Auth::user()->id],'class'=>'user']) !!}
                {!! Form::label('', 'Nova Senha', []) !!}
                {!! Form::password('password', ['class'=>'form-control', 'required'] ) !!}
                {!! Form::label('', 'Repita  Senha', []) !!}
                {!! Form::password('c_password', ['class'=>'form-control','required'] ) !!}
                {!! Form::submit('Enviar', ['class'=>['btn', 'btn-success','btn-block','mt-2']]) !!}
                {!! Form::close() !!}

        </div>
    </div>
</div>