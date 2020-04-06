@if(isset($banco) == null)
{!! Form::open(['route'=>'banco_create','class'=>'user']) !!}
@else
{!! Form::model($banco,['class'=>'user','route' => ['banco_update',$banco->id]]) !!}
@endif
<div class="container-fluid py-3">
</div>
<div class="form-group row">
    {!! Form::hidden('user_id', Auth::user()->id, ['']) !!}
    <div class="col-sm-6">
        {!! Form::label('', 'Nome Completo do Titular:', ['']) !!}
        {!! Form::text('nome_completo', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-3">
        {!! Form::label('', 'CPF do Titular:', ['']) !!}
        {!! Form::text('cpf', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-3">
        {!! Form::label('', 'Tipo de Conta:', ['']) !!}
       {!! Form::select('tipo_conta',['corrente'=>'Corrente','poupanca'=> 'Poupança'], '', ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>

    <div class="col-sm-4">
        {!! Form::label('banco', 'Nome do Banco:', ['']) !!}
        {!! Form::text('banco', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-3">
        {!! Form::label('banco', 'Agência:', ['']) !!}
        {!! Form::text('agencia', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-3">
        {!! Form::label('banco', 'Conta:', ['']) !!}
        {!! Form::text('conta', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-2">
        {!! Form::label('banco', 'OP:', ['']) !!}
        {!! Form::text('operacao', $value=null, ['class'=> ['form-control','form-control-user']]) !!}
    </div>

    <div class="col-sm-12 mt-3">
        {!! Form::submit('Enviar', ['class' => ['btn', 'btn-primary',  'btn-block', 'form-nonresize']]) !!}
    </div>
</div>


{!! Form::close() !!}