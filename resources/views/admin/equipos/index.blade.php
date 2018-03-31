@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('equipos.create') }}" class="btn btn-info btn-xs pull-right"><i class="icon-plus3 position-left"></i>Crear</a>
         <h4> <span class="text-semibold"></span>Panel de la lista de equipos</h4><hr>
      </div>
      <div class="panel-body p-5">
         <div class="col-sm-3">
            <i class="ti-search"></i>
            {!! Form::open(['method' => 'GET', 'route' => 'equipos.index', 'class' => 'form-group']) !!}
               {!! Form::select('nombreequipo_id', $relacion_nombreequipos, null, ['class' => 'select-search','placeholder' => 'selecciona equipo...', 'required' => 'required'])!!}
         </div>
         <div class="col-xs-6 col-sm-3">
               {!! Form::button('Buscar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs'] ) !!}
            {!! Form::close() !!}
         </div>
         <div class="col-xs-6 col-sm-6">
            <a href="{{ route('equipos.index') }}" class="btn btn-info btn-xs pull-right">ver todos</a>
            <a href="{{ route('plantillas.create') }}" class="btn btn-info btn-xs pull-center"><i class="icon-user-plus"></i></a>
         </div>
      </div>
   </div>
   <div class="row">
      @forelse ($equipos as $equipo)
      <div class="col-sm-12 col-md-6 col-lg-4">
         <div class="panel panel-flat border-top-lg border-top-indigo">
            <div class="panel-heading">
               <div class="panel-title media-body">
                  {{-- <h4 class="media-heading text-indigo">{{$equipo->nombreequipo->nombre_nombreequipo}}</h4> --}}
                  <h4 class="media-heading text-indigo">{{$equipo->nombre_equipo}}</h4>
                  <span class="text-muted">Temporada:&nbsp; {{$equipo->temporada}}</span>
                  <span class="media-heading text-grey-800">Entrenador:&nbsp; {{$equipo->user->nombre_user}} {{$equipo->user->apellidos_user}}</span>
               </div>
               <div class="heading-elements">
                  <div class="heading-btn">
                     <a href="{{ route('plantillas.show', $equipo->id) }}" class="btn btn-block btn bg-primary-300 btn-xs"><i class="icon-file-eye"></i></a>
                     {{-- {!! Form::open(['route' => ['partidos.destroy', $partido->id], 'method' => 'DELETE'])!!}
                     <button type="button" onclick="return confirm('Estas seguro de eliminarlo?')" class="btn btn-info btn-icon"><i class="icon-bin"></i></button>
                     {!! Form::close() !!} --}}
                  </div>
                  <ul class="icons-list">
                     <li><a data-action="collapse"></a></li>
                  </ul>
               </div>
            </div>
            <div class="panel-body collapse">
               <hr><h4 class="card-title m-t-10">INFORMACIÓN</h4>
               <p><b>Categoría:&nbsp; </b> {{$equipo->categoria_equipo}}</p>
               <p><b>Liga:&nbsp; </b>{{$equipo->liga->nombre_liga}} {{$equipo->liga->categoria_liga}}</p>
               <p><b>Comentarios:&nbsp; </b> <td>{{$equipo->comentario_equipo}}</p><hr>
               <div class="col-xs-6">
                     <a href="{{route('equipos.edit', $equipo->id)}}" class="btn btn-block btn-info p-5">Editar <i class="icon-arrow-right14 position-right"></i></a>
               </div>
               <div class="col-xs-6">
                  {!! Form::open(['route' => ['equipos.destroy', $equipo->id], 'method' => 'DELETE'])!!}
                     <button class="btn btn-block btn-warning p-5" onclick="return confirm('Estas seguro de eliminarlo?')">Eliminar <i class="icon-arrow-right14 position-right"></i></button>
                  {!! Form::close() !!}
               </div>
            </div>
         </div>
      </div>
      @empty
         <div class="col-md-12">
            <div class="alert alert-primary alert-bordered">
               <span class="text-semibold">Lo siento!</span> No se encuentran equipos en esa temporada
            </div>
         </div>
      @endforelse
   </div>
   {{$equipos->render()}}
@endsection
