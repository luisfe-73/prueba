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
         <a href="{{ route('plantillas.create') }}" class="btn btn-info btn-xs pull-right"><i class="icon-plus3 position-center"></i>Añadir jugador a plantilla</a>

         <h4> <span class="text-semibold"></span>Panel de la plantilla - {{$jugador->nombre_equipo}}</h4><hr>
      </div>
      <div class="panel-body p-15">
         <a href="{{ route('equipos.index') }}" class="btn btn-info btn-xs pull-right">volver a equipos</a>
      </div>
   </div>
   <table class="table datatable-button-html5-basic datatable-responsive table-sm table-bordered table-striped">
      <thead class="bg-teal-300">
         <tr>
            <th>Nombre</th>
            <th>Foto</th>
            <th>Pos</th>
            <th>Rol</th>
            <th>Edad</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Ficha</th>
            <th>Procede</th>
            <th class="text-center"></th>
            <th class="text-center"></th>
         </tr>
      </thead>
      <tbody>
         @foreach ($jugadores as $jugador)
         <tr>
            <td><a href="#modal_verjugador-{{$jugador->id}}" class="waves-effect waves-light red modal-trigger" data-toggle="modal">{{$jugador->nombre_jugador}} {{$jugador->apellidos_jugador}}</a></td>
            @include('admin.plantillas.partials.modal_plantilla')
            <td width="5px">
               @if ($jugador->foto_jugador_equipo)
               <div class="thumb img-xs">
                  <a href="{{$jugador->foto_jugador_equipo}}" >
                     <img src="{{$jugador->foto_jugador_equipo}}" class="img-circle img-xs">
                  </a>
               </div>
                  {{-- <img src="{{$jugador->foto_jugador_equipo}}" class="img-circle img-xs"> --}}
               @else
                  <img src="{{ asset('assets/images/avatar/avatar_user.png') }}" class="img-circle img-xs">
               @endif
            </td>
            <td width="5px">
               @include('admin.plantillas.partials.posiciones')
            </td>
            <td>{{$jugador->rol_jugador_equipo}}</td>
            <td>{{\Carbon\Carbon::parse($jugador->fecha_nacimiento_jugador)->age}} años</td>
            {{-- <td>{{$jugador->edad_jugador_equipo}}</td> --}}
            <td>{{$jugador->peso_jugador_equipo}} kg</td>
            <td>{{$jugador->altura_jugador_equipo}} cm</td>
            <td width="5px">
               @if ($jugador->ficha_jugador_equipo)
                  <img src="{{$jugador->ficha_jugador_equipo}}" class="img img-xs">
               @else
                  <img src="{{ asset('assets/images/avatar/avatar_ficha.png') }}" class="img img-xs">
               @endif
            </td>
            <td>{{$jugador->nombre_rival}}</td>
            <td width="5px" class="text-center">
               <a href="{{ route('plantillas.edit', $jugador->id) }}" class="btn btn-info btn-xs p-5"><i class="icon-user-check"></i></a>
            </td>
            <td width="5px" class="text-center">
               {!! Form::open(['route' => ['plantillas.destroy', $jugador->id], 'method' => 'DELETE'])!!}
                  <button onclick="return confirm('Estas seguro de eliminarlo?')" class="btn btn-warning btn-xs p-5"><i class="icon-user-cancel"></i></button>
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
            <a href="{{ route('equipos.index') }}" class="btn bg-info-400 pull-right">Volver</a>
            <h4><span class="text-semibold"></span>Panel de la lista de equipos</h4><hr>
         </div>
      </div>
      <div class="alert alert-primary alert-bordered">
         <span class="text-semibold">Lo siento!</span> No se encuentran jugadores en este equipo
      </div>
   </div>
@endif
@endsection
