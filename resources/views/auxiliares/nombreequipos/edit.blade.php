@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="page-header page-header-default bg-slate-300">
      <div class="page-header-content">
         <div class="page-title">
            <a href="{{ route('nombreequipos.index') }}" class="btn bg-teal-400 pull-right">volver</a>
            <h4> <span class="text-semibold"></span>Editar nombre de equipo</h4>
         </div>
      </div>
   </div>
      {!! Form::model($nombreequipos, ['route' => ['nombreequipos.update', $nombreequipos->id], 'method' => 'PUT']) !!}
         @include('auxiliares.nombreequipos.partials.form_nombreequipo')
      {!! Form::close() !!}
@endsection
