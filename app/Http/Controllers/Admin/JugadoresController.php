<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\JugadorStoreRequest;
use App\Http\Requests\JugadorUpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use DB;
use App\Club;
use App\Jugador;


class JugadoresController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index(Request $request)
   {
      $clubs = Club::get();
      //meto en variable lo que traigo del buscador
      $busca_name=$request->input('busca_name');
      //hago la consulta y la devuelvo
      //se mandan los datos relacionados del jugador con la poblacion y el contacto
      $jugadores = Jugador::where('nombre_jugador', "LIKE", "%$busca_name%")->orderBy('nombre_jugador', 'ASC')->paginate(20);

      return View('admin.jugadores.index', compact('clubs','jugadores'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      $clubs = Club::get();
      $jugadores = Jugador::orderBy('id', 'DESC')->get();

      return View('admin.jugadores.create', compact('clubs', 'jugadores'));
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(JugadorStoreRequest $request)
   {
      $jugador = Jugador::create($request->all());
      if($request->file('foto_jugador')){
         $path = Storage::disk('public')->put('images/jugadores', $request->file('foto_jugador'));
         $jugador->fill(['foto_jugador' => asset($path)])->save();
      }
      return redirect()->route('jugadores.index')->with('info', 'Jugador creado con éxito');
   }

   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function show($id)
   {
      //no se usa
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
      $jugadores = Jugador::find($id);

      return View('admin.jugadores.edit', compact('clubs', 'jugadores'));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(JugadorUpdateRequest $request, $id)
   {
      $jugador = Jugador::find($id);
      $jugador->fill($request->all())->save();
      if($request->file('foto_jugador')){
         $path = Storage::disk('public')->put('images/jugadores', $request->file('foto_jugador'));
         $jugador->fill(['foto_jugador' => asset($path)])->save();
      }
      return redirect()->route('jugadores.index')->with('info', 'Jugador actualizado con éxito');
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function destroy($id)
   {
      Jugador::find($id)->delete();

      return back()->with('info', 'Jugador eliminado con éxito');
   }
}
