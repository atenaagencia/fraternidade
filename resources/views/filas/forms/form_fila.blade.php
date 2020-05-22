@inject('filiados', 'App\User')
@php
 $filiado = $filiados->where('nivel_id',$nivel)->pluck('nome', 'id')->all();   
@endphp


{!! Form::open(['route'=>'filas.store','class'=>'user']) !!}
{!! Form::label('', 'Usuário', []) !!}
{!! Form::select('user_id',$filiado,'' , ['class'=>'form-control']) !!}
{!! Form::submit('Enviar', ['class'=>['btn', 'btn-success','btn-block','mt-2']]) !!}
{!! Form::close() !!}