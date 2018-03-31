<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\partidoStoreRequest;
use DB;
use App\Club;
use App\Partido;
use App\Equipo;
use App\Plantilla;
use App\Nombreequipo;
use App\Rival;

class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //total de partidos del equipo
      $numpartidos = Partido::nombreequipo($request->get('nombreequipo_id'))->count();
      //busco los partidos y los muestro
      $partidos = Partido::nombreequipo($request->get('nombreequipo_id'))
      ->with('plantillas','plantillas.jugador','equipo.nombreequipo', 'rival')
      ->orderBy('dia_partido', 'DESC')->paginate(10);
      $clubs = Club::get();
      $relacion_nombreequipos = Equipo::orderBy('nombre_equipo')->pluck('nombre_equipo', 'id');

      return View('web.partidos.index', compact('clubs', 'partidos', 'relacion_nombreequipos', 'relacion_rivales', 'numpartidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clubs = Club::get();
      //creo los partidos
      $partidos = Partido::with('equipo.nombreequipo', 'rival')
      ->orderBy('dia_partido', 'DESC')->paginate(20);

      $relacion_nombreequipos = Equipo::orderBy('nombre_equipo')->pluck('nombre_equipo', 'id');
      $relacion_rivales = Rival::orderBy('nombre_rival')->pluck('nombre_rival', 'id');

      return View('web.partidos.create', compact('clubs', 'partidos', 'relacion_nombreequipos', 'relacion_rivales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartidoStoreRequest $request)
    {
      //guardo los partidos
      $partido = Partido::create($request->all());

      return redirect()->route('partidos.index')->with('info', 'partido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $clubs = Club::get();
      //muestro los jugadores que juegan ese partido
      $jugadores = DB::table('jugador_partido')->where('partido_id', $id)

      //campos a buscar en la consulta tabla.campo
      ->select('jugador_partido.*', 'partidos.dia_partido', 'partidos.tipo_partido', 'partidos.condicion_partido', 'partidos.gol_equipo', 'partidos.gol_rival', 'partidos.resultado_partido',
      'rivals.nombre_rival', 'equipos.nombre_equipo', 'equipos.user_id', 'jugadors.nombre_jugador', 'jugadors.apellidos_jugador', 'equipo_jugador.rol_jugador_equipo')
      //union de las tablas de busqueda tabla, id primario, id foraneo
      ->join('partidos','partidos.id','=','partido_id')
      ->join('rivals','rivals.id','=','rival_id')
      ->join('equipos','equipos.id','=','equipo_id')
      ->join('equipo_jugador','equipo_jugador.id','=','equipojugador_id')
      ->join('jugadors','jugadors.id','=','jugador_id')
      ->get();

      return View('web.partidos.show', compact('clubs', 'jugadores'));
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
      //edito el partido
      $partidos = Partido::find($id);

      $relacion_nombreequipos = Equipo::orderBy('nombre_equipo')->pluck('nombre_equipo', 'id');
      $relacion_rivales = Rival::orderBy('nombre_rival')->pluck('nombre_rival', 'id');

      return View('web.partidos.edit', compact('clubs', 'partidos', 'relacion_nombreequipos', 'relacion_rivales'));
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
      //actualizo el partido
      $partido = partido::find($id);
      $partido->fill($request->all())->save();

      return redirect()->route('partidos.index')->with('info', 'partido actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //elimino el partido
      Partido::find($id)->delete();

      return back()->with('info', 'partido eliminado con exito');
    }
}
