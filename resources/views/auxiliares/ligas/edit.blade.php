@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="page-header page-header-default bg-slate-300">
      <div class="page-header-content">
         <div class="page-title">
            <a href="{{ route('ligas.index') }}" class="btn bg-teal-400 pull-right">volver</a>
            <h4> <span class="text-semibold"></span>Editar Liga</h4>
         </div>
      </div>
   </div>
      {!! Form::model($ligas, ['route' => ['ligas.update', $ligas->id], 'method' => 'PUT']) !!}
         @include('auxiliares.ligas.partials.form_liga')
      {!! Form::close() !!}
@endsection
