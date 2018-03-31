<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PlantillaStoreRequest;
use App\Http\Requests\PlantillaUpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Club;
use App\Equipo;
use App\Jugador;
use App\Nombreequipo;
use App\Rival;

class PlantillasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
      $clubs = Club::get();
      //consultas para que salga en el formulario los nombres y no el id
      $relacion_nombreequipos = Equipo::orderBy('nombreequipo_id')->pluck('nombre_equipo', 'id');
      $relacion_jugadores = Jugador::orderBy('nombre_jugador')->pluck('nombre_futbol', 'id');
      $relacion_rivales = Rival::orderBy('nombre_rival')->pluck('nombre_rival', 'id');
      // $edad = Carbon::createFromDate($plantillas->fecha_nacimiento_jugador)->age;

      return View('admin.plantillas.create', compact('clubs', 'relacion_nombreequipos', 'relacion_jugadores', 'relacion_rivales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlantillaStoreRequest $request)
    {
      $data = request()->all();
      $data = request()->except(['_token']); //no traigo el tocken para que no lo inserte

      //saco los id del request para insertar la imagen en el jugador correcto
      $idequipo = $request->equipo_id;
      $idjugador = $request->jugador_id;

      $plantilla = DB::table('equipo_jugador')->insert($data);
      if($request->file('foto_jugador_equipo')){
         $path = Storage::disk('public')->put('images/plantillas', $request->file('foto_jugador_equipo'));
         //actualizo el campo foto con la ruta de la imagen
         $plantilla = DB::table('equipo_jugador')->where('equipo_id', $idequipo)->where('jugador_id', $idjugador)->update(['foto_jugador_equipo' => asset($path)]);
      }
      if($request->file('ficha_jugador_equipo')){
         $path = Storage::disk('public')->put('images/plantillas', $request->file('ficha_jugador_equipo'));
         //actualizo el campo foto con la ruta de la imagen
         $plantilla = DB::table('equipo_jugador')->where('equipo_id', $idequipo)->where('jugador_id', $idjugador)->update(['ficha_jugador_equipo' => asset($path)]);
      }

      return redirect()->route('plantillas.show', $idequipo)->with('info', 'Jugador añadido a plantilla con éxito');
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
      $jugadores = DB::table('equipo_jugador')->where('equipo_id',$id)
      //campos a buscar en la consulta tabla.campo
      ->select('equipo_jugador.*', 'equipos.nombreequipo_id', 'equipos.temporada', 'equipos.nombre_equipo', 'equipos.user_id', 'jugadors.nombre_jugador', 'jugadors.apellidos_jugador',
      'jugadors.nombre_futbol', 'jugadors.fecha_nacimiento_jugador', 'jugadors.direccion_jugador', 'jugadors.codigo_postal_jugador', 'jugadors.poblacion_jugador',
      'jugadors.provincia_jugador', 'jugadors.pais_jugador', 'jugadors.telefono_jugador', 'jugadors.foto_jugador', 'jugadors.estado_jugador', 'jugadors.contacto_padre_jugador',
      'jugadors.contacto_madre_jugador', 'jugadors.contacto_otro1_jugador', 'jugadors.contacto_otro2_jugador', 'jugadors.comentario_jugador',
      'nombreequipos.nombre_nombreequipo', 'rivals.nombre_rival')
      //union de las 3 tablas de busqueda tabla, id primario, id foraneo
      ->join('equipos','equipos.id','=','equipo_id')
      ->join('jugadors','jugadors.id','=','jugador_id')
      ->join('nombreequipos','nombreequipos.id','=','nombreequipo_id')
      ->join('rivals','rivals.id','=','club_procede_id')
      ->orderBy('jugadors.nombre_jugador')->get();

      return View('admin.plantillas.show', compact('clubs', 'jugadores', 'relacion_nombreequipos'));
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
      $jugadores = DB::table('equipo_jugador')->where('id', $id)->first();

      //consultas para que salga en el formulario los nombres y no el id
      $relacion_jugadores = Jugador::orderBy('nombre_jugador')->pluck('nombre_jugador', 'id');
      $relacion_nombreequipos = Equipo::orderBy('nombreequipo_id')->pluck('nombre_equipo', 'id');
      $relacion_rivales = Rival::orderBy('nombre_rival')->pluck('nombre_rival', 'id');

      return View('admin.plantillas.edit', compact('clubs', 'jugadores', 'relacion_rivales', 'relacion_nombreequipos', 'relacion_jugadores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlantillaUpdateRequest $request, $id)
    {
      $data = request()->all();
      $data = request()->except(['_token']);

      //forma para que solo ingrese los campos que se espacifican en el only
      $jugador = DB::table('equipo_jugador')->where('id', $id)->update($request->only('rol_jugador_equipo', 'foto_jugador_equipo', 'edad_jugador_equipo',
                                       'peso_jugador_equipo', 'altura_jugador_equipo', 'ficha_jugador_equipo', 'club_procede_id'));
      if($request->file('foto_jugador_equipo')){
         $path = Storage::disk('public')->put('images/plantillas', $request->file('foto_jugador_equipo'));
         //actualizo el campo foto con la ruta de la imagen
         $jugador = DB::table('equipo_jugador')->where('id', $id)->update(['foto_jugador_equipo' => asset($path)]);
      }
      if($request->file('ficha_jugador_equipo')){
         $path = Storage::disk('public')->put('images/plantillas', $request->file('ficha_jugador_equipo'));
         //actualizo el campo foto con la ruta de la imagen
         $jugador = DB::table('equipo_jugador')->where('id', $id)->update(['ficha_jugador_equipo' => asset($path)]);
      }
      return redirect()->route('plantillas.show', $request->equipo_id)->with('info', 'Jugador editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //elimino la fila del jugador de la tabla equipo_jugador que corresponda con su id
      $jugadores = DB::table('equipo_jugador')->where('id', $id)->delete();

      return back()->with('info', 'Jugador eliminado de la plantilla con éxito');
    }
}
