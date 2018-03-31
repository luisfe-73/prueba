<script type="text/javascript">
   Highcharts.chart('containergol_asis', {
      chart: {
         type: 'column'
      },
      title: {
         text: 'Estadisticas temporada goles y asistencias en {{$numpartidos}} partidos'
      },
      subtitle: {
         @foreach ($clubs as $club)
         @endforeach
         text: 'Jugadores del equipo {{$datos->nombre_equipo}} de la {{$club->nombre_club}}'
      },
      xAxis: {
         categories: [
            @foreach ($partidos as $datos)
            '{{$datos->nombre_jugador}} {{$datos->apellidos_jugador}}',
            @endforeach
         ],
         crosshair: true
      },
      yAxis: {
         min: 0,
         title: {
            text: 'Datos'
         }
      },
      tooltip: {
         headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
         '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
         footerFormat: '</table>',
         shared: true,
         useHTML: true
      },
      plotOptions: {
         column: {
            pointPadding: 0.2,
            borderWidth: 0
         },
         column: {//leyenda en la barra
            dataLabels: {
               enabled: true
            }
         }
      },
      legend: {
         enabled: true,
         //backgroundColor: '#FCFFC5',
         align: 'center',
      },
      series: [{
         name: 'Goles',
         data: [
            @foreach ($partidos as $datos)
            {{$datos->total_goles}},
            @endforeach
         ]
      }, {
         name: 'Asistencias',
         data: [
            @foreach ($partidos as $datos)
            {{$datos->total_asistencias}},
            @endforeach
         ]
      }]
   });
</script>
