@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="page-header page-header-default bg-slate-300">
      <div class="page-header-content">
         <div class="page-title">
            <a href="{{ route('rivales.create') }}" class="btn bg-teal-400 pull-right">Crear</a>
            <h4> <span class="text-semibold"></span>Lista de los rivales</h4>
         </div>
      </div>
   </div>
   <div class="panel panel-flat">
      <table class="table datatable-button-html5-basic datatable-responsive table-sm table-bordered table-striped">
         <thead class="bg-teal-300">
            <tr>
               <th>Nombre rival</th>
               <th>Poblacion</th>
               <th>Provincia</th>
               <th>Pais</th>
               <th>Comentario</th>
               <th class="text-center"></th>
               <th class="text-center"></th>
            </tr>
         </thead>
         <tbody>
            @foreach ($rivales as $rival)
            <tr>
               <td>{{$rival->nombre_rival}}</td>
               <td>{{$rival->poblacion_rival}}</td>
               <td>{{$rival->provincia_rival}}</td>
               <td>{{$rival->pais_rival}}</td>
               <td>{{$rival->comentario_rival}}</td>
               <td width="5px" class="text-center">
                  <a href="{{ route('rivales.edit', $rival->id) }}" class="btn btn-info btn-xs p-5"><i class="icon-pencil5"></i></a>
               </td>
               <td width="5px" class="text-center">
                  {!! Form::open(['route' => ['rivales.destroy', $rival->id], 'method' => 'DELETE'])!!}
                     <button onclick="return confirm('Estas seguro de eliminarlo?')" class="btn btn-warning btn-xs p-5"><i class="icon-bin"></i></button>
                  {!! Form::close() !!}
               </td>
            </tr>
         @endforeach
         </tbody>
      </table>
   </div>
@endsection
