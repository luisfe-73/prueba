@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('jugadores.index') }}" class="btn bg-info-400 pull-right">Volver</a>
         <h4><span class="text-semibold"></span>Crear Jugador</h4><hr>
      </div>
   </div>
   {!! Form::open(['route' => 'jugadores.store', 'files' => true, 'class'=> 'form-horizontal']) !!}
      @include('admin.jugadores.partials.form_jugador')
   {!! Form::close() !!}
@endsection
