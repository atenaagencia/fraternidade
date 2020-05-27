@inject('filiados', 'App\User')
@php
 $filiado = $filiados->where('nivel_id',$nivel)->orderBy('nome','asc')->get(); 
@endphp


{!! Form::open(['route'=>'filas.store','class'=>'user']) !!}
{!! Form::label('', 'Usuário', []) !!}
<select name="user_id" id="" class=" form-control" required>
    <option value="">-----</option>
    @foreach ($filiado as $user)
    @if(count($user->fila) == 0)
    <option value="{{$user->id}}">{{$user->nome.' | '.$user->usuario}}</option>
    @endif
    @endforeach
</select>
{{-- {!! Form::select('user_id',$filiado,'' , ['class'=>'form-control', 'required']) !!} --}}
{!! Form::submit('Enviar', ['class'=>['btn', 'btn-success','btn-block','mt-2']]) !!}
{!! Form::close() !!}