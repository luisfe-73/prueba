@extends('layouts.default')
|@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('partidos.index') }}" class="btn bg-info-400 pull-right">salir</a>
         <h4><span class="text-semibold"></span>Edición del jugador: {{$relacion_nombrejugador->nombre_jugador}} {{$relacion_nombrejugador->apellidos_jugador}}</h4><hr>
      </div>
   </div>
      {!! Form::model($jugadores, ['route' => ['encuentros.update', $jugadores->id], 'method' => 'PUT', 'files' => true]) !!}
         @include('web.encuentros.partials.form_encuentro_edit')
      {!! Form::close() !!}
@endsection
