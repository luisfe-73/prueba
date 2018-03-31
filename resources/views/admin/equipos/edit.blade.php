@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('equipos.index') }}" class="btn bg-info-400 pull-right">Volver</a>
         <h4><span class="text-semibold"></span>Edición del equipo: {{$equipos->nombre_equipo}}</h4><hr>
      </div>
   </div>
   {!! Form::model($equipos, ['route' => ['equipos.update', $equipos->id], 'method' => 'PUT', 'files' => true]) !!}
      @include('admin.equipos.partials.form_equipo_edit')
   {!! Form::close() !!}
@endsection
