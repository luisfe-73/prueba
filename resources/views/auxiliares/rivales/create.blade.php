@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="page-header page-header-default bg-slate-300">
      <div class="page-header-content">
         <div class="page-title">
            <a href="{{ route('rivales.index') }}" class="btn bg-teal-400 pull-right">volver</a>
            <h4> <span class="text-semibold"></span>Crear rival</h4>
         </div>
      </div>
   </div>
      {!! Form::open(['route' => 'rivales.store', 'class'=> 'form-horizontal']) !!}
         @include('auxiliares.rivales.partials.form_rival')
      {!! Form::close() !!}
@endsection
