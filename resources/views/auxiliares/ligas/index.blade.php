@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="page-header page-header-default bg-slate-300">
      <div class="page-header-content">
         <div class="page-title">
            <a href="{{ route('ligas.create') }}" class="btn bg-teal-400 pull-right">Crear</a>
            <h4> <span class="text-semibold"></span>Lista de las ligas</h4>
         </div>
      </div>
   </div>
   <div class="panel panel-flat">
      <table class="table datatable-button-html5-basic datatable-responsive table-sm table-bordered table-striped">
         <thead class="bg-teal-300">
            <tr>
               <th>Nombre liga</th>
               <th>Categoria liga</th>
               <th>Comentario</th>
               <th class="text-center"></th>
               <th class="text-center"></th>
            </tr>
         </thead>
         <tbody>
            @foreach ($ligas as $liga)
            <tr>
               <td>{{$liga->nombre_liga}}</td>
               <td>{{$liga->categoria_liga}}</td>
               <td>{{$liga->comentario_liga}}</td>
               <td width="5px" class="text-center">
                  <a href="{{ route('ligas.edit', $liga->id) }}" class="btn btn-info btn-xs p-5"><i class="icon-pencil5"></i></a>
               </td>
               <td width="5px" class="text-center">
                  {!! Form::open(['route' => ['ligas.destroy', $liga->id], 'method' => 'DELETE'])!!}
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
