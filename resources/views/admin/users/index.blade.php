@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('users.create') }}" class="btn btn-info btn-xs pull-right"><i class="icon-plus3 position-left"></i>Crear</a>
         <h4> <span class="text-semibold"></span>Panel de la lista de entrenadores</h4><hr>
      </div>
      <div class="panel-body p-5">
         <div class="col-sm-3">
            <i class="ti-search"></i>
            {!! Form::open(['method' => 'GET', 'route' => 'users.index', 'class' => 'form-group']) !!}
               {!! Form::text('busca_name', null, ['class' => 'form-control form-control-line', 'placeholder' => 'Buscar entrenador']) !!}
         </div>
         <div class="col-xs-6 col-sm-3">
               {!! Form::button('Buscar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs'] ) !!}
            {!! Form::close() !!}
         </div>
         <div class="col-xs-6 col-sm-6">
            <a href="{{ route('users.index') }}" class="btn btn-info btn-xs pull-right">ver todos</a>
         </div>
      </div>
   </div>
   <div class="row">
      @forelse ($users as $user)
      <div class="col-sm-6 col-md-6 col-lg-4">
         <div class="panel panel-flat border-top-lg border-top-indigo">
            <div class="panel-heading">
               <div class="media-left">
                  @if ( $user->foto_user)
                     <img src="{{$user->foto_user}}" class="img-circle img-lg">
                  @else
                     <img src="{{ asset('assets/images/avatar/avatar_user.png') }}" class="img-circle img-lg">
                  @endif
                  </a>
               </div>
               <div class="panel-title media-body">
                  <h6 class="media-heading text-indigo">{{$user->nombre_user}}</h6>
                  <span class="text-muted">{{$user->apellidos_user}}</span>
                  @if ($user->estado_user=='activo')
                     <span class="media-heading text-info">{{$user->estado_user}}</span>
                  @else
                     <span class="media-heading text-warning">{{$user->estado_user}}</span>
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
                  <b>Email:</b>&nbsp; {{$user->email}}</p>
                  <b>Rol:</b>&nbsp; {{$user->rol_user}}</p>
                  <b>Dirección:</b>&nbsp; {{$user->direccion_user}}</p>
                  <b>Codigo postal:</b>&nbsp; {{$user->codigo_postal_user}}</p>
                  <b>Población:</b>&nbsp; {{$user->poblacion_user}}</p>
                  <b>Provincia:</b>&nbsp; {{$user->provincia_user}}</p>
                  <b>País:</b>&nbsp; {{$user->pais_user}}</p>
                  <b>Teléfono:</b>&nbsp; {{$user->telefono_user}}</p><hr>
                  <div class="col-xs-6">
                     <a href="{{route('users.edit', $user->id)}}" class="btn btn-block btn-info p-5">Editar <i class="icon-arrow-right14 position-right"></i></a>
                  </div>
                  <div class="col-xs-6">
                     {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE'])!!}
                        <button class="btn btn-block btn-warning p-5" onclick="return confirm('Estas seguro de eliminarlo?')">Eliminar <i class="icon-arrow-right14 position-right"></i></button>
                     {!! Form::close() !!}
                  </div>
            </div>
         </div>
      </div>
      @empty
         <div class="col-md-12">
            <div class="alert alert-primary alert-bordered">
               <span class="text-semibold">Lo siento!</span> No se encuentran entranadores con ese nombre
            </div>
         </div>
      @endforelse
   </div>
   {{$users->render()}}
@endsection
