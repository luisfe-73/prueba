@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('users.index') }}" class="btn bg-info-400 pull-right">Volver</a>
         <h4><span class="text-semibold"></span>Crear Entrenador</h4><hr>
      </div>
   </div>
      {!! Form::open(['route' => 'users.store', 'files' => true, 'class'=> 'form-horizontal']) !!}
         @include('admin.users.partials.form_entrenador')
      {!! Form::close() !!}
@endsection
