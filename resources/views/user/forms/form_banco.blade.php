@if(isset($banco) == null)
{!! Form::open(['route'=>'banco_create','class'=>'user']) !!}
@else
{!! Form::model($banco,['class'=>'user','route' => ['banco_update',$banco->id]]) !!}
@endif

<div class="form-group row">
    {!! Form::hidden('user_id', Auth::user()->id, ['']) !!}
    <div class="container-fluid font-weight-bold">
        <h1>Dados Gerais</h1><hr>
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'Nome Completo do Titular*:', ['']) !!}
        {!! Form::text('nome_completo', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'CPF do Titular*:', ['']) !!}
        {!! Form::text('cpf', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="container-fluid font-weight-bold mt-5">
        <h1>Dados Bancários</h1><hr>
    </div>
    <div class="col-sm-4 mt-1">
        {!! Form::label('', 'Tipo de Conta*:', ['']) !!}
        {!! Form::select('tipo_conta',['corrente'=>'Corrente','poupanca'=> 'Poupança'], '', ['class'=>
        ['form-control','form-control-user'],'required']) !!}
    </div>

    <div class="col-sm-4 mt-1">
        {!! Form::label('banco', 'Nome do Banco*:', ['']) !!}
        {!! Form::text('banco', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4 mt-1">
        {!! Form::label('banco', 'Agência*:', ['']) !!}
        {!! Form::text('agencia', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-4 mt-2">
        {!! Form::label('banco', 'Conta*:', ['']) !!}
        {!! Form::text('conta', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-2 mt-2">
        {!! Form::label('banco', 'OP:', ['']) !!}
        {!! Form::text('operacao', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
    </div>
    <div class="col-sm-12 mt-5">
        <p>(*) Campos obrigatórios</p>
    </div>
    <div class="col-sm-8 offset-2 mt-5">
        @if(isset($banco) == null)
        {!! Form::submit('Enviar', ['class' => ['btn', 'btn-primary', 'btn-block', 'form-nonresize']]) !!}
        @else
        <div class="row">
            <div class="col-sm-6">
                {!! Form::button('Descartar alterações', ['class' => ['btn', 'btn-light', 'btn-block', 'form-nonresize']]) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::submit('Alterar', ['class' => ['btn', 'btn-primary', 'btn-block', 'form-nonresize']]) !!}
            </div>
        </div>
        @endif
    </div>   
</div>


{!! Form::close() !!}