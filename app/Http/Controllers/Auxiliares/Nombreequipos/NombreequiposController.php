<?php

namespace App\Http\Controllers\Auxiliares\Nombreequipos;

use Illuminate\Http\Request;
use App\Http\Requests\NombreequipoStoreRequest;
use App\Http\Requests\NombreequipoUpdateRequest;
use App\Http\Controllers\Controller;
use App\Club;
use App\Nombreequipo;

class NombreequiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clubs = Club::get();
      $nombreequipos = Nombreequipo::all();

      return View('auxiliares.nombreequipos.index', compact('clubs', 'nombreequipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clubs = Club::get();
      $nombreequipos = Nombreequipo::orderBy('id', 'DESC')->get();

      return View('auxiliares.nombreequipos.create', compact('clubs', 'nombreequipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NombreequipoStoreRequest $request)
    {
      $nombreequipo = Nombreequipo::create($request->all());

      return redirect()->route('nombreequipos.index')->with('info', 'Nombre de equipo creado con éxito');
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
      $clubs = Club::get();
      $nombreequipos = Nombreequipo::find($id);

      return View('auxiliares.nombreequipos.edit', compact('clubs', 'nombreequipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NombreequipoUpdateRequest $request, $id)
    {
      $nombreequipo = Nombreequipo::find($id);
      $nombreequipo->fill($request->all())->save();

      return redirect()->route('nombreequipos.index')->with('info', 'Nombre de equipo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Nombreequipo::find($id)->delete();

      return back()->with('info', 'Nombre de equipo eliminado con éxito');
    }
}
