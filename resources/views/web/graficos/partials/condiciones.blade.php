{{-- titulares --}}
<div id="containertitular" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
Highcharts.chart('containertitular', {
   chart: {
      type: 'column'
   },
   title: {
      text: 'Estadisticas temporada condición titular de los jugadores en {{$numpartidos}} partidos'
   },
   subtitle: {
      @foreach ($clubs as $club)
      @endforeach
      text: 'Jugadores del equipo {{$datos->nombre_equipo}} de la {{$club->nombre_club}}'
   },
   xAxis: {
      type: 'category',
      labels: {
         rotation: -45,
         style: {
            fontSize: '11px',
            fontFamily: 'Poppins, sans-serif'
         }
      }
   },
   yAxis: {
      min: 0,
      title: {
         text: 'Número de veces'
      }
   },
   legend: {
      enabled: false
   },
   tooltip: {
      pointFormat: 'Número de veces: <b>{point.y:.0f}</b>'
   },
   series: [{
      color: '#70a316',
      name: 'titulares',
      data: [
         @foreach ($condiciones as $condicion)
            @if ($condicion->condicion_jugador_partido == 'titular')
            ['{{$condicion->nombre_jugador}} {{$condicion->apellidos_jugador}}', {{$condicion->veces}}],
            @endif
         @endforeach
      ],
      dataLabels: {
         enabled: true,
         style: {
            fontSize: '10px',
            fontFamily: 'Verdana, sans-serif'
         }
      }
   }]
});
</script>
{{-- fin titulares --}}
{{-- suplentes --}} <hr>
<div id="containersuplente" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
Highcharts.chart('containersuplente', {
   chart: {
      type: 'column'
   },
   title: {
      text: 'Estadisticas temporada condición suplente de los jugadores en {{$numpartidos}} partidos'
   },
   subtitle: {
      text: 'Jugadores del equipo {{$datos->nombre_equipo}} de la {{$club->nombre_club}}'
   },
   xAxis: {
      type: 'category',
      labels: {
         rotation: -45,
         style: {
            fontSize: '11px',
            fontFamily: 'Poppins, sans-serif'
         }
      }
   },
   yAxis: {
      min: 0,
      title: {
         text: 'Número de veces'
      }
   },
   legend: {
      enabled: false
   },
   tooltip: {
      pointFormat: 'Número de veces: <b>{point.y:.0f}</b>'
   },
   series: [{
      color: '#bf4a66',
      name: 'titulares',
      data: [
         @foreach ($condiciones as $condicion)
            @if ($condicion->condicion_jugador_partido == 'suplente')
            ['{{$condicion->nombre_jugador}} {{$condicion->apellidos_jugador}}', {{$condicion->veces}}],
            @endif
         @endforeach
      ],
      dataLabels: {
         enabled: true,
         style: {
            fontSize: '10px',
            fontFamily: 'Verdana, sans-serif'
         }
      }
   }]
});
</script>
{{-- fin suplentes --}}
{{-- no convocados --}} <hr>
<div id="containernoconvocado" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
Highcharts.chart('containernoconvocado', {
   chart: {
      type: 'column'
   },
   title: {
      text: 'Estadisticas temporada condición no convocados de los jugadores en {{$numpartidos}} partidos'
   },
   subtitle: {
      text: 'Jugadores del equipo {{$datos->nombre_equipo}} de la {{$club->nombre_club}}'
   },
   xAxis: {
      type: 'category',
      labels: {
         rotation: -45,
         style: {
            fontSize: '11px',
            fontFamily: 'Poppins, sans-serif'
         }
      }
   },
   yAxis: {
      min: 0,
      title: {
         text: 'Número de veces'
      }
   },
   legend: {
      enabled: false
   },
   tooltip: {
      pointFormat: 'Número de veces: <b>{point.y:.0f}</b>'
   },
   series: [{
      color: '#676054',
      name: 'titulares',
      data: [
         @foreach ($condiciones as $condicion)
            @if ($condicion->condicion_jugador_partido == 'no convocado')
            ['{{$condicion->nombre_jugador}} {{$condicion->apellidos_jugador}}', {{$condicion->veces}}],
            @endif
         @endforeach
      ],
      dataLabels: {
         enabled: true,
         style: {
            fontSize: '10px',
            fontFamily: 'Verdana, sans-serif'
         }
      }
   }]
});
</script>
{{-- fin no convocados --}}
{{-- lesionados --}} <hr>
<div id="containerlesionados" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
Highcharts.chart('containerlesionados', {
   chart: {
      type: 'column'
   },
   title: {
      text: 'Estadisticas temporada condición lesionados de los jugadores en {{$numpartidos}} partidos'
   },
   subtitle: {
      text: 'Jugadores del equipo {{$datos->nombre_equipo}} de la {{$club->nombre_club}}'
   },
   xAxis: {
      type: 'category',
      labels: {
         rotation: -45,
         style: {
            fontSize: '11px',
            fontFamily: 'Poppins, sans-serif'
         }
      }
   },
   yAxis: {
      min: 0,
      title: {
         text: 'Número de veces'
      }
   },
   legend: {
      enabled: false
   },
   tooltip: {
      pointFormat: 'Número de veces: <b>{point.y:.0f}</b>'
   },
   series: [{
      color: '#d7d638',
      name: 'titulares',
      data: [
         @foreach ($condiciones as $condicion)
            @if ($condicion->condicion_jugador_partido == 'lesionado')
            ['{{$condicion->nombre_jugador}} {{$condicion->apellidos_jugador}}', {{$condicion->veces}}],
            @endif
         @endforeach
      ],
      dataLabels: {
         enabled: true,
         style: {
            fontSize: '10px',
            fontFamily: 'Verdana, sans-serif'
         }
      }
   }]
});
</script>
{{-- fin lesionados --}}
</div>
{{-- fin panel de estadisticas de condicion --}}
