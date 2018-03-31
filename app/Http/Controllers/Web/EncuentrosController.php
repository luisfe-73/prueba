<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Club;


class EncuentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //
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
      //aqui recibo el id del partido busco los jugadores del equipo que juega ese partido y los añado
      //busco el id del partido que viene por parametro
      $equipo = DB::table('partidos')->where('id', $id)->first();
      //busco el id del equipo que juega ese partido
      $equipos = DB::table('equipos')->where('id', $equipo->equipo_id)->first();
      //busco los jugadores de ese equipo
      $equipo_jugador = DB::table('equipo_jugador')->where('equipo_id', $equipos->id)
      ->select('equipo_jugador.id','equipo_jugador.equipo_id', 'equipo_jugador.jugador_id', 'jugadors.nombre_jugador', 'jugadors.apellidos_jugador', 'equipo_jugador.rol_jugador_equipo')
      //union de las tablas de busqueda tabla, id primario, id foraneo
      ->join('jugadors','jugadors.id','=','jugador_id')
      ->get();

      //queda insertar el la BD las filas de los jugadores
         foreach ($equipo_jugador as $key) {
            $insertar = DB::table('jugador_partido')->insert([
               'partido_id' => $equipo->id,
               'equipojugador_id' => $key->id,
               'condicion_jugador_partido' => 'no convocado',
               'minutos_jugados_jugador_partido' => 0,
               'goles_jugador_partido' => 0,
               'asistencias_jugador_partido' => 0,
               'tarjeta_amarilla_jugador_partido' => 0,
               'tarjeta_roja_jugador_partido' => 0,
               'analisis_jugador_partido' => 'a definir',
               'id_equipo' => $key->equipo_id,
               'id_jugador' => $key->jugador_id,
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
            ]);
         }
      return redirect()->route('partidos.index')->with('info', 'Jugadores añadidos al partido con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $clubs = Club::get();
      //edito los datos del jugador en el partido
      $jugadores = DB::table('jugador_partido')->where('id', $id)->first();

      $relacion_nombrejugadorid = DB::table('equipo_jugador')->where('id', $jugadores->equipojugador_id)->first();
      $relacion_nombrejugador = DB::table('jugadors')->where('id', $relacion_nombrejugadorid->jugador_id)->first();

      return View('web.encuentros.edit', compact('clubs', 'jugadores', 'relacion_nombrejugador'));
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
      //actualizo los datos del jugador en el partido
      $jugador = DB::table('jugador_partido')->where('id', $id)->update($request->only('partido_id','condicion_jugador_partido', 'minutos_jugados_jugador_partido', 'goles_jugador_partido',
                                       'asistencias_jugador_partido', 'tarjeta_amarilla_jugador_partido', 'tarjeta_roja_jugador_partido', 'analisis_jugador_partido'));

      return redirect()->route('partidos.show', $request->partido_id)->with('info', 'Jugador editado en el partido con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //elimino el jugador del partido
      $jugadores = DB::table('jugador_partido')->where('id', $id)->delete();

      return back()->with('info', 'Jugador eliminado del partido con éxito');
    }
}
