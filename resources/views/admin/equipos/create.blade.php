@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('equipos.index') }}" class="btn bg-info-400 pull-right">Volver</a>
         <h4><span class="text-semibold"></span>Crear Equipo</h4><hr>
      </div>
   </div>
   {!! Form::open(['route' => 'equipos.store', 'files' => true, 'class'=> 'form-horizontal']) !!}
      @include('admin.equipos.partials.form_equipo')
   {!! Form::close() !!}
@endsection
