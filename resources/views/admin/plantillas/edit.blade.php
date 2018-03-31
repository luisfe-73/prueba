@extends('layouts.default')
|@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('equipos.index') }}" class="btn bg-info-400 pull-right">salir</a>
         <h4><span class="text-semibold"></span>Editar jugador de plantilla</h4><hr>
      </div>
   </div>
      {!! Form::model($jugadores, ['route' => ['plantillas.update', $jugadores->id], 'method' => 'PUT', 'files' => true]) !!}
         @include('admin.plantillas.partials.form_plantilla_edit')
      {!! Form::close() !!}
@endsection
