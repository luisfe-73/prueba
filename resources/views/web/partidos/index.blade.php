@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <a href="{{ route('partidos.create') }}" class="btn btn-info btn-xs pull-right"><i class="icon-plus3 position-left"></i>Crear</a>
         <h4> <span class="text-semibold"></span>Panel de la lista de partidos</h4><hr>
      </div>
      <div class="panel-body p-5">
         <div class="col-sm-3">
            <i class="ti-search"></i>
            {!! Form::open(['method' => 'GET', 'route' => 'partidos.index', 'class' => 'form-group']) !!}
               {!! Form::select('nombreequipo_id', $relacion_nombreequipos, null, ['class' => 'select-search','placeholder' => 'selecciona equipo...', 'required' => 'required'])!!}
         </div>
         <div class="col-xs-6 col-sm-3">
            {!! Form::button('Buscar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs'] ) !!}
            {!! Form::close() !!}
         </div>
         <div class="col-xs-6 col-sm-6">
            <a href="{{ route('partidos.index') }}" class="btn btn-info btn-xs pull-right">ver todos</a>
         </div>
      </div>
   </div>
   <div class="row">
      @forelse ($partidos as $partido)
      <div class="col-sm-12 col-md-12 col-lg-6">
         <div class="panel panel-flat border-top-lg border-top-indigo">
            <div class="panel-heading">
               <div class="panel-title media-body">
               @if ($partido->condicion_partido == 'local')
                  <h5 class="media-heading text-indigo">
                     {{$partido->equipo->nombreequipo->nombre_nombreequipo}}&nbsp;
                     <span class="text-orange-800">{{$partido->gol_equipo}}</span>&nbsp; -
                     <span class="text-orange-800">{{$partido->gol_rival}}</span>&nbsp;
                     {{$partido->rival->nombre_rival}}</h5>
                     <h6 class="media-heading text-grey-800">Día del partido:&nbsp; {{$partido->dia_partido}}</h6>
                     <span class="text-muted">Condición:&nbsp; {{$partido->condicion_partido}}</span>
               @else
                  <h5 class="media-heading text-indigo">
                     {{$partido->rival->nombre_rival}}&nbsp;
                     <span class="text-orange-800">{{$partido->gol_rival}}</span>&nbsp; -
                     <span class="text-orange-800">{{$partido->gol_equipo}}</span>&nbsp;
                     {{$partido->equipo->nombreequipo->nombre_nombreequipo}}</h5>
                     <h6 class="media-heading text-grey-800">Día del partido:&nbsp; {{$partido->dia_partido}}</h6>
                     <span class="text-muted">Condición:&nbsp; {{$partido->condicion_partido}}</span>
               @endif
               </div>
               <div class="heading-elements">
                  <div class="heading-btn">
                     <a href="{{ route('partidos.show', $partido->id) }}" class="btn btn-block btn bg-primary-300 btn-xs"><i class="icon-file-eye"></i></a>
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
               {{-- <hr><h4 class="card-title m-t-10">INFORMACION</h4><hr> --}}
               <a href="{{ route('partidos.edit', $partido->id) }}" class="btn btn-block btn bg-primary-300 btn-xs">Editar partido</a>
               @forelse ($partido->plantillas as $datos)
               @empty
                  <a href="{{ route('encuentros.show', $partido->id) }}" class="btn btn-block btn bg-warning-300 btn-xs">Añadir jugadores</a>
               @endforelse
            </div>
         </div>
      </div>
      @empty
         <div class="col-md-12">
            <div class="alert alert-primary alert-bordered">
               <span class="text-semibold">Lo siento!</span> No se encuentran partidos de ese equipo
            </div>
         </div>
      @endforelse
   </div>
   {{$partidos->render()}}
@endsection
