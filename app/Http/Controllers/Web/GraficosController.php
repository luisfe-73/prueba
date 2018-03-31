<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Club;
use App\Equipo;
use App\Partido;
use DB;

class GraficosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //asi trae la suma de los min  del jugador en el equipo y
      $busca_equipo=$request->input('nombreequipo_id');
      //total de partidos del equipo
      $numpartidos = Partido::where('equipo_id', $busca_equipo)->count();

      $clubs = Club::get();
      $partidos = DB::table('jugador_partido')
      ->join('equipo_jugador','equipo_jugador.id','=','equipojugador_id')
      ->join('equipos','equipos.id','=','equipo_id')
      ->join('jugadors','jugadors.id','=','jugador_id')
      ->select('jugadors.nombre_jugador', 'jugadors.apellidos_jugador', 'equipos.nombre_equipo',
      DB::raw('SUM(jugador_partido.minutos_jugados_jugador_partido) as total_minutos'),
      DB::raw('SUM(jugador_partido.goles_jugador_partido) as total_goles'),
      DB::raw('SUM(jugador_partido.asistencias_jugador_partido) as total_asistencias'),
      DB::raw('SUM(jugador_partido.tarjeta_amarilla_jugador_partido) as total_tarjeta_ama'),
      DB::raw('SUM(jugador_partido.tarjeta_roja_jugador_partido) as total_tarjeta_roj'))
      ->where('id_equipo', '=', $busca_equipo)
      ->groupBy('equipos.nombre_equipo', 'jugadors.nombre_jugador','jugadors.apellidos_jugador')->get();


      $condiciones = DB::table('jugador_partido')
      ->join('equipo_jugador','equipo_jugador.id','=','equipojugador_id')
      ->join('equipos','equipos.id','=','equipo_id')
      ->join('jugadors','jugadors.id','=','jugador_id')
      ->select('jugadors.nombre_jugador', 'jugadors.apellidos_jugador', 'equipos.nombre_equipo', 'condicion_jugador_partido',
      DB::raw('count(jugador_partido.condicion_jugador_partido) as veces'))
      ->where('id_equipo', '=', $busca_equipo)
      ->groupBy( 'condicion_jugador_partido','equipos.nombre_equipo', 'jugadors.nombre_jugador','jugadors.apellidos_jugador')->get();

      $relacion_nombreequipos = Equipo::orderBy('nombre_equipo')->pluck('nombre_equipo', 'id');

      return View('web.graficos.index', compact('clubs', 'partidos', 'condiciones', 'relacion_nombreequipos', 'numpartidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
