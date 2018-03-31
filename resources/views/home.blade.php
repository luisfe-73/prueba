@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         @foreach ($clubs as $club)
         @endforeach
         <h4> <span class="text-semibold"></span>Panel de la administración {{$club->nombre_club}}</h4><hr>
      </div>
   </div>
   <div class="alert alert-primary alert-bordered">
      <span class="text-semibold">Zona de la administración en la que se controlan los entrenadores, jugadores y partidos del club.</span> Pinchar en la mano para acceder.
   </div>
   <div class="row">
      <div class="col-sm-6 col-md-4">
         <div class="panel panel-body bg-primary-300 has-bg-image">
            <div class="media no-margin">
               <div class="media-left media-middle">
                  <a href="{{ route('users.index') }}"><i class="icon-pointer icon-3x opacity-100"></i></a>
               </div>
               <div class="media-body text-right">
                  <h2 class="no-margin">{{$entrenadores}}</h2>
                  <span class="text-uppercase text-size-mini">entrenadores activos</span>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-6 col-md-4">
         <div class="panel panel-body bg-primary-300 has-bg-image">
            <div class="media no-margin">
               <div class="media-left media-middle">
                  <a href="{{ route('jugadores.index') }}"><i class="icon-pointer icon-3x opacity-100"></i></a>
               </div>
               <div class="media-body text-right">
                  <h2 class="no-margin">{{$jugadores}}</h2>
                  <span class="text-uppercase text-size-mini">jugadores activos</span>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-6 col-md-4">
         <div class="panel panel-body bg-primary-300 has-bg-image">
            <div class="media no-margin">
               <div class="media-left media-middle">
                  <a href="{{ route('equipos.index') }}"><i class="icon-pointer icon-3x opacity-100"></i></a>
               </div>
               <div class="media-body text-right">
                  <h2 class="no-margin">{{$equipos}}</h2>
                  <span class="text-uppercase text-size-mini">plantillas</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="alert alert-success alert-bordered">
      <span class="text-semibold">Zona de la administración en la que se controlan los equipos, ligas y rivales del club.</span> Pinchar en la mano para acceder.
   </div>
   <div class="row">
      <div class="col-sm-6 col-md-4">
         <div class="panel panel-body bg-success-300 has-bg-image">
            <div class="media no-margin">
               <div class="media-left media-middle">
                  <a href="{{ route('nombreequipos.index') }}"><i class="icon-pointer icon-3x opacity-100"></i></a>
               </div>
               <div class="media-body text-right">
                  <h2 class="no-margin">{{$nombreequipos}}</h2>
                  <span class="text-uppercase text-size-mini">equipos</span>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-6 col-md-4">
         <div class="panel panel-body bg-success-300 has-bg-image">
            <div class="media no-margin">
               <div class="media-left media-middle">
                  <a href="{{ route('ligas.index') }}"><i class="icon-pointer icon-3x opacity-100"></i></a>
               </div>
               <div class="media-body text-right">
                  <h2 class="no-margin">{{$ligas}}</h2>
                  <span class="text-uppercase text-size-mini">ligas</span>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-6 col-md-4">
         <div class="panel panel-body bg-success-300 has-bg-image">
            <div class="media no-margin">
               <div class="media-left media-middle">
                  <a href="{{ route('rivales.index') }}"><i class="icon-pointer icon-3x opacity-100"></i></a>
               </div>
               <div class="media-body text-right">
                  <h2 class="no-margin">{{$rivales}}</h2>
                  <span class="text-uppercase text-size-mini">rivales</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="alert alert-warning alert-bordered">
      <span class="text-semibold">Zona de la administración en la que se controlan los partidos de los equipos y las estadísticas.</span> Pinchar en la mano para acceder.
   </div>
   <div class="row">
      <div class="col-md-6">
         <div class="panel panel-body bg-warning-300 has-bg-image">
            <div class="media no-margin">
               <div class="media-left media-middle">
                  <a href="{{ route('partidos.index') }}"><i class="icon-pointer icon-3x opacity-100"></i></a>
               </div>
               <div class="media-body text-right">
                  <h2 class="no-margin">{{$partidos}}</h2>
                  <span class="text-uppercase text-size-mini">partidos</span>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="panel panel-body bg-info-300 has-bg-image">
            <div class="media no-margin">
               <div class="media-left media-middle">
                  <a href="{{ route('graficos.index') }}"><i class="icon-pointer icon-3x opacity-100"></i></a>
               </div>
               <div class="media-body text-right">
                  <h2 class="no-margin">ver</h2>
                  <span class="text-uppercase text-size-mini">estadísticas</span>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
