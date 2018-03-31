<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\EquipoStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use DB;
use App\Club;
use App\Equipo;
use App\User;
use App\Nombreequipo;
use App\Liga;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      //meto en variable lo que traigo del buscador
      $busca_temporada=$request->input('temporada');
      $busca_equipo=$request->input('nombreequipo_id');

      //hago la consulta y la devuelvo con los datos de los equipos
      $equipos = Equipo::with('nombreequipo', 'liga', 'user', 'jugadores')->where('id', "LIKE", "%$busca_equipo%")
      ->paginate(15);
      $clubs = Club::get();
      //variable para que busque el id del jugador dentro de jugador_equipo y se pueda editar, se itera con la variable en la vista equipos.index
      $jugadores = DB::table('equipo_jugador')->where('equipo_id',$busca_equipo)
      //campos a buscar en la consulta tabla.campo
      ->select('equipo_jugador.*', 'equipos.nombreequipo_id', 'equipos.temporada', 'jugadors.nombre_jugador',
               'jugadors.apellidos_jugador', 'nombreequipos.nombre_nombreequipo', 'rivals.nombre_rival')
      //union de las 3 tablas de busqueda tabla, id primario, id foraneo
      ->join('equipos','equipos.id','=','equipo_id')
      ->join('jugadors','jugadors.id','=','jugador_id')
      ->join('nombreequipos','nombreequipos.id','=','nombreequipo_id')
      ->join('rivals','rivals.id','=','club_procede_id')
      ->orderBy('jugadors.nombre_jugador')->get();

      //consultas para que salga en el formulario los nombres y no el id
      // $relacion_users = User::orderBy('nombre_user')->pluck('nombre_user', 'id');
      $relacion_nombreequipos = Equipo::orderBy('nombre_equipo')->pluck('nombre_equipo', 'id');
      // $relacion_ligas = Liga::orderBy('nombre_liga')->pluck('nombre_liga', 'id');

      return View('admin.equipos.index', compact('clubs', 'equipos', 'relacion_nombreequipos', 'jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clubs = Club::get();
      $equipos = Equipo::orderBy('id', 'DESC')->get();
      //consultas para que salga en el formulario los nombres y no el id
      $relacion_users = User::orderBy('nombre_user')->pluck('nombre_user', 'id');
      $relacion_nombreequipos = Nombreequipo::orderBy('nombre_nombreequipo')->pluck('nombre_nombreequipo', 'id');
      $relacion_ligas = Liga::orderBy('nombre_liga')->pluck('liga', 'id');

      return View('admin.equipos.create', compact('clubs', 'equipos', 'relacion_users', 'relacion_nombreequipos', 'relacion_ligas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipoStoreRequest $request)
    {
      $equipo = Equipo::create($request->all());
      if($request->file('foto_equipo')){
         $path = Storage::disk('public')->put('images/equipos', $request->file('foto_equipo'));
         $equipo->fill(['foto_equipo' => asset($path)])->save();
      }
      return redirect()->route('equipos.index')->with('info', 'Equipo creado con éxito');
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
      $equipos = Equipo::find($id);

      return View('admin.plantillas.show', compact('clubs', 'equipos'));
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
      $equipos = Equipo::find($id);

      //consultas para que salga en el formulario los nombres y no el id
      $relacion_users = User::orderBy('nombre_user')->pluck('nombre_user', 'id');
      $relacion_nombreequipos = Nombreequipo::orderBy('nombre_nombreequipo')->pluck('nombre_nombreequipo', 'id');
      $relacion_ligas = Liga::orderBy('nombre_liga')->pluck('nombre_liga', 'id');

      return View('admin.equipos.edit', compact('clubs', 'equipos', 'relacion_users', 'relacion_nombreequipos', 'relacion_ligas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipoStoreRequest $request, $id)
    {
      $equipo = Equipo::find($id);
      $equipo->fill($request->all())->save();
      if($request->file('foto_equipo')){
         $path = Storage::disk('public')->put('images/equipos', $request->file('foto_equipo'));
         $equipo->fill(['foto_equipo' => asset($path)])->save();
      }
      return redirect()->route('equipos.index')->with('info', 'Equipo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Equipo::find($id)->delete();

      return back()->with('info', 'Equipo eliminado con éxito');
    }
}
