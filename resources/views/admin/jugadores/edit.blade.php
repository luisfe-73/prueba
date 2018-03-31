@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('jugadores.index') }}" class="btn bg-info-400 pull-right">Volver</a>
         <h4><span class="text-semibold"></span>Editar Jugador</h4><hr>
      </div>
   </div>
      {!! Form::model($jugadores, ['route' => ['jugadores.update', $jugadores->id], 'method' => 'PUT', 'files' => true]) !!}
         @include('admin.jugadores.partials.form_jugador')
      {!! Form::close() !!}
@endsection
