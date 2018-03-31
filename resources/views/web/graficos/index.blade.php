@extends('layouts.default')
@extends('layouts.sidebar')
@section('content')
   <div class="panel panel-flat bg-slate-300">
      <div class="panel-heading p-15">
         <h4> <span class="text-semibold"></span>Panel de gráficos estadísticos</h4><hr>
      </div>
      <div class="panel-body p-5">
         <div class="col-sm-3">
            <i class="ti-search"></i>
            {!! Form::open(['method' => 'GET', 'route' => 'graficos.index', 'class' => 'form-group']) !!}
               {!! Form::select('nombreequipo_id', $relacion_nombreequipos, null, ['class' => 'select-search','placeholder' => 'selecciona equipo...', 'required' => 'required'])!!}
         </div>
         <div class="col-xs-6 col-sm-3">
            {!! Form::button('Buscar <i class="icon-arrow-right14 position-right"></i>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs'] ) !!}
            {!! Form::close() !!}
         </div>
      </div>
   </div>
   <script type="text/javascript" src="{{ asset("assets/js/highcharts/highcharts.js")}}"></script>
   <script type="text/javascript" src="{{ asset("assets/js/highcharts/exporting.js")}}"></script>
      <div class="tabbable">
         <ul class="nav nav-tabs nav-tabs-solid nav-tabs-component nav-justified">
            <li class="active"><a href="#solid-rounded-justified-tab1" data-toggle="tab">estadísticas de partido</a></li>
            <li><a href="#solid-rounded-justified-tab2" data-toggle="tab">estadísticas de condición</a></li>
         </ul>
         @forelse ($partidos as $datos)
         <div class="tab-content">
            {{-- panel de estadisticas --}}
            <div class="tab-pane active" id="solid-rounded-justified-tab1">
               <div id="containerdatos" style="margin: 40px auto"></div>
               @include('web.graficos.partials.minutos')
               <div id="containergol_asis" style="margin: 40px auto"></div>
               @include('web.graficos.partials.gol_asis')
               <div id="containertarjetas" style="margin: 40px auto"></div>
               @include('web.graficos.partials.tarjetas')
            </div>
            {{-- fin panel de estadisticas --}}
            {{-- panel de estadisticas de condicion --}}
            <div class="tab-pane" id="solid-rounded-justified-tab2">
               @include('web.graficos.partials.condiciones')
            </div>
         </div>
         @empty
            <div class="col-md-12">
               <div class="alert alert-primary alert-bordered">
                  <span class="text-semibold">Lo siento! no hay datos del equipo</span> <p>Selecciona un equipo para ver las estadísticas</p>
               </div>
            </div>
         @endforelse
      </div>
@endsection
