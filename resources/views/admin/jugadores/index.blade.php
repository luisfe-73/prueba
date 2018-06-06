@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('jugadores.create') }}" class="btn btn-info btn-xs pull-right"><i class="icon-plus3 position-left"></i>Crear</a>
         <h4> <span class="text-semibold"></span>Panel de la lista de jugadores</h4><hr>
      </div>
      <div class="panel-body p-5">
         <div class="col-sm-3">
            <i class="ti-search"></i>
            {!! Form::open(['method' => 'GET', 'route' => 'jugadores.index', 'class' => 'form-group']) !!}
               {!! Form::text('busca_name', null, ['class' => 'form-control form-control-line', 'placeholder' => 'Buscar jugador']) !!}
         </div>
         <div class="col-xs-6 col-sm-3">
               {!! Form::button('Buscar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs'] ) !!}
            {!! Form::close() !!}
         </div>
         <div class="col-xs-6 col-sm-6">
            <a href="{{ route('jugadores.index') }}" class="btn btn-info btn-xs pull-right">ver todos</a>
         </div>
      </div>
   </div>
   <div class="row">
      @forelse ($jugadores as $jugador)
      <div class="col-sm-6 col-md-6 col-lg-4">
         <div class="panel panel-flat border-top-lg border-top-indigo">
            <div class="panel-heading">
               <div class="media-left">
                  @if ( $jugador->foto_jugador)
                     <img src="{{$jugador->foto_jugador}}" class="img-circle img-lg">
                  @else
                     <img src="{{ asset('assets/images/avatar/avatar_user.png') }}" class="img-circle img-lg">
                  @endif
                  </a>
               </div>
               <div class="panel-title media-body">
                  <h6 class="media-heading text-indigo">{{$jugador->nombre_jugador}}</h6>
                  <span class="text-muted">{{$jugador->apellidos_jugador}}</span>
                  @if ($jugador->estado_jugador=='activo')
                     <span class="media-heading text-info">{{$jugador->estado_jugador}}</span>
                  @else
                     <span class="media-heading text-warning">{{$jugador->estado_jugador}}</span>
                  @endif
               </div>
               <div class="heading-elements">
                  <ul class="icons-list">
                     <li><a data-action="collapse"></a></li>
                  </ul>
               </div>
            </div>
            <div class="panel-body collapse">
               <hr><h4 class="card-title m-t-10">INFORMACIÓN</h4>
                  <strong><h6 class="text-right">{{$jugador->nombre_futbol}}</h6></strong>
                  <b>Nacimiento:</b>&nbsp; {{$jugador->fecha_nacimiento_jugador}}</p>
                  <b>Dirección:</b>&nbsp; {{$jugador->direccion_jugador}}</p>
                  <b>Codigo postal:</b>&nbsp; {{$jugador->codigo_postal_jugador}}</p>
                  <b>Población:</b>&nbsp; {{$jugador->poblacion_jugador}}</p>
                  <b>Provincia:</b>&nbsp; {{$jugador->provincia_jugador}}</p>
                  <b>País:</b>&nbsp; {{$jugador->pais_jugador}}</p>
                  <b>Telefono:</b>&nbsp; {{$jugador->telefono_jugador}}</p>
                  <b>Contacto padre:</b>&nbsp; {{$jugador->contacto_padre_jugador}}</p>
                  <b>Contacto madre:</b>&nbsp; {{$jugador->contacto_madre_jugador}}</p>
                  <b>Contacto otro1:</b>&nbsp; {{$jugador->contacto_otro1_jugador}}</p>
                  <b>Contacto otro2:</b>&nbsp; {{$jugador->contacto_otro2_jugador}}</p>
                  <b>Comentario:</b>&nbsp; {{$jugador->comentario_jugador}}</p><hr>
                  <div class="col-xs-6">
                        <a href="{{route('jugadores.edit', $jugador->id)}}" class="btn btn-block btn-info p-5">Editar <i class="icon-arrow-right14 position-right"></i></a>
                  </div>
                  <div class="col-xs-6">
                     {!! Form::open(['route' => ['jugadores.destroy', $jugador->id], 'method' => 'DELETE'])!!}
                        <button class="btn btn-block btn-warning p-5" onclick="return confirm('Estas seguro de eliminarlo?')">Eliminar <i class="icon-arrow-right14 position-right"></i></button>
                     {!! Form::close() !!}
                  </div>
            </div>
         </div>
      </div>
      @empty
         <div class="col-md-12">
            <div class="alert alert-primary alert-bordered">
               <span class="text-semibold">Lo siento!</span> No se encuentran jugadores con ese nombre.
            </div>
         </div>
      @endforelse
   </div>
   {{$jugadores->render()}}
@endsection
