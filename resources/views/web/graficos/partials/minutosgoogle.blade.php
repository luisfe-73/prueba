<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
   var data = google.visualization.arrayToDataTable([
      ['nombre', 'minutos'],
      @foreach ($partidos as $datos)
         ['{{$datos->nombre_jugador}} {{$datos->apellidos_jugador}}' ,{{$datos->total_minutos}}],
      @endforeach
   ]);
   @foreach ($clubs as $club)
   @endforeach

   var options = {
      chart: {
        title: 'Estadisticas temporada minutos jugados',
        subtitle: 'Jugadores del equipo {{$datos->nombre_equipo}} de la {{$club->nombre_club}}',
     },
     vAxis: {format: '0'},
     legend: {
			position: 'none',
			colors: ['black']
		}
   };
   var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
   chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>
