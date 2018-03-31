@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="page-header page-header-default bg-slate-300">
      <div class="page-header-content">
         <div class="page-title">
            <a href="{{ route('nombreequipos.create') }}" class="btn bg-teal-400 pull-right">Crear</a>
            <h4> <span class="text-semibold"></span>Lista de los nombres de equipo</h4>
         </div>
      </div>
   </div>
   <div class="panel panel-flat">
      <table class="table datatable-button-html5-basic datatable-responsive table-sm table-bordered table-striped">
         <thead class="bg-teal-300">
            <tr>
               <th>Nombre equipo</th>
               <th>Comentario</th>
               <th class="text-center"></th>
               <th class="text-center"></th>
            </tr>
         </thead>
         <tbody>
            @foreach ($nombreequipos as $nombreequipo)
            <tr>
               <td>{{$nombreequipo->nombre_nombreequipo}}</td>
               <td>{{$nombreequipo->comentario_nombreequipo}}</td>
               <td width="5px" class="text-center">
                  <a href="{{ route('nombreequipos.edit', $nombreequipo->id) }}" class="btn btn-info btn-xs p-5"><i class="icon-pencil5"></i></a>
               </td>
               <td width="5px" class="text-center">
                  {!! Form::open(['route' => ['nombreequipos.destroy', $nombreequipo->id], 'method' => 'DELETE'])!!}
                     <button onclick="return confirm('Estas seguro de eliminarlo?')" class="btn btn-warning btn-xs p-5"><i class="icon-bin"></i></button>
                  {!! Form::close() !!}
               </td>
            </tr>
         @endforeach
         </tbody>
      </table>
   </div>
   <!-- /basic responsive configuration -->
@endsection
