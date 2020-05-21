@if(isset($user) == null)
{!! Form::open(['route'=>'cadastro.store','class'=>'user']) !!}
@else
{!! Form::model($user,['class'=>'user','route' => ['cadastro.update',$user->id]]) !!}
@method('PUT')
@endif

<div class="form-group row">
    {!! Form::hidden('user_id', Auth::user()->id, ['']) !!}
    <div class="container-fluid font-weight-bold">
        <h1>Informações Pessoais</h1><hr>
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'Nome Completo:', ['']) !!}
        {!! Form::text('nome', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'Usuário:', ['']) !!}
        {!! Form::text('usuario', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'E-mail:', ['']) !!}
        {!! Form::email('email', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'Telefone:', ['']) !!}
        {!! Form::text('telefone', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'WhatsApp:', ['']) !!}
        {!! Form::text('whatsapp', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'Conta Picpay:', ['']) !!}
        {!! Form::text('picpay', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'Saldo :', ['']) !!}
        {!! Form::text('saldo', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'Nivel:', ['']) !!}
       {!! Form::select('nivel_id', [''=>'---','1'=>'1','2'=>'2','3'=>'3'], $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'Doações Recebidas :', ['']) !!}
        {!! Form::text('cont_deposito', $value=null, ['class'=> ['form-control','form-control-user'],'required']) !!}
    </div>
    <div class="col-sm-6 mt-1">
        {!! Form::label('', 'Status:', ['']) !!}
        {!! Form::select('status', [''=> '---','pendente'=>'pendente','ativo'=>'ativo'], $value=null, ['class'=>
        ['form-control','form-control-user'],'required']) !!}
    </div>

    <div class="col-sm-6 mt-1">
      {!! Form::hidden('password', bcrypt('1234'), []) !!}
    </div>


    
   
    <div class="col-sm-8 offset-2 mt-5">
        @if(isset($user) == null)
        {!! Form::submit('Enviar', ['class' => ['btn', 'btn-primary', 'btn-block', 'form-nonresize']]) !!}
        @else
        <div class="row">
            <div class="col-sm-12">
                {!! Form::submit('Salvar', ['class' => ['btn', 'btn-primary', 'btn-block', 'form-nonresize']]) !!}
            </div>
        </div>
        @endif
    </div>   
</div>


{!! Form::close() !!}