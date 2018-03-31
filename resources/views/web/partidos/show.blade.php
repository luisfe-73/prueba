@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   {{-- @forelse ($jugadores as $jugador)
   @empty
      <div class="col-md-12">
         <div class="alert alert-primary alert-bordered">
            <span class="text-semibold">Lo siento!</span> No se encuentran jugadores en ese equipo
         </div>
      </div>
   @endforelse --}}
   @foreach ($jugadores as $jugador)
   @endforeach
   @if (count($jugadores))
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <h4> <span class="text-semibold"></span>Panel del partido<hr>
            @if ($jugador->condicion_partido == 'local')
               <h4 class="media-heading text-indigo">
                  {{$jugador->nombre_equipo}}&nbsp; -
                  {{$jugador->nombre_rival}}</h4>
            @else
               <h4 class="media-heading text-indigo">
                  {{$jugador->nombre_rival}}&nbsp; -
                  {{$jugador->nombre_equipo}}</h4>
            @endif
      </div>
      <div class="panel-body p-15">
         <a href="{{ route('partidos.index') }}" class="btn btn-info btn-xs pull-right">volver a partidos</a>
         <p>Día del partido:&nbsp; {{$jugador->dia_partido}}</p>
         <p>Tipo de partido:&nbsp; {{$jugador->tipo_partido}}</p>
         <p>Condición:&nbsp; {{$jugador->condicion_partido}}</p>
      </div>
   </div>
   <table class="table datatable-button-html5-basic datatable-responsive table-sm table-bordered table-striped">
      <thead class="bg-teal-300">
         <tr>
            <th>Nombre</th>
            <th>Condición</th>
            <th>Minutos</th>
            <th>Goles</th>
            <th>Asistencias</th>
            <th>T. ama</th>
            <th>T. roja</th>
            <th>Análisis</th>
            <th class="text-center"></th>
            <th class="text-center"></th>
         </tr>
      </thead>
      <tbody>
         @foreach ($jugadores as $jugador)
         <tr>
            <td>{{$jugador->nombre_jugador}} {{$jugador->apellidos_jugador}}</td>
            {{-- <td><a href="#modal_verjugador-{{$jugador->id}}" class="waves-effect waves-light red modal-trigger" data-toggle="modal">{{$jugador->nombre_jugador}} {{$jugador->apellidos_jugador}}</a></td>
            @include('admin.plantillas.partials.modal_plantilla') --}}
            <td>{{$jugador->condicion_jugador_partido}}</td>
            <td>{{$jugador->minutos_jugados_jugador_partido}}</td>
            <td>{{$jugador->goles_jugador_partido}}</td>
            <td>{{$jugador->asistencias_jugador_partido}}</td>
            <td>{{$jugador->tarjeta_amarilla_jugador_partido}}</td>
            <td>{{$jugador->tarjeta_roja_jugador_partido}}</td>
            <td>{{$jugador->analisis_jugador_partido}}</td>
            <td width="5px" class="text-center">
               <a href="{{ route('encuentros.edit', $jugador->id) }}" class="btn btn-info btn-xs p-5"><i class="icon-pencil5"></i></a>
            </td>
            <td width="5px" class="text-center">
               {!! Form::open(['route' => ['encuentros.destroy', $jugador->id], 'method' => 'DELETE'])!!}
                  <button onclick="return confirm('Estas seguro de eliminarlo?')" class="btn btn-warning btn-xs p-5"><i class="icon-bin"></i></button>
               {!! Form::close() !!}
            </td>
         </tr>
      @endforeach
      </tbody>
   </table>
@else
   <div class="col-md-12">
      <div class="panel panel-flat bg-slate-300">
         <div class="panel-heading p-15">
            <h4> <span class="text-semibold"></span>Panel del partido</h4><hr>
         </div>
         <div class="panel-body p-15">
            <a href="{{ route('partidos.index') }}" class="btn btn-info btn-xs pull-right">volver</a>
         </div>
      </div>
      <div class="alert alert-primary alert-bordered">
         <span class="text-semibold">Lo siento!</span> No se encuentran jugadores en este partido
      </div>
   </div>
@endif
@endsection
