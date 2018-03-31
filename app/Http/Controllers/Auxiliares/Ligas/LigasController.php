<?php

namespace App\Http\Controllers\Auxiliares\Ligas;

use Illuminate\Http\Request;
use App\Http\Requests\LigaStoreRequest;
use App\Http\Requests\LigaUpdateRequest;
use App\Http\Controllers\Controller;
use App\Club;
use App\Liga;

class LigasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clubs = Club::get();
      $ligas = Liga::all();

      return View('auxiliares.ligas.index', compact('clubs', 'ligas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clubs = Club::get();
      $ligas = Liga::orderBy('id', 'DESC')->get();
      //para llevar al formulario las categorias de las ligas
      // $categorias = Liga::orderBy('categoria')->pluck('categoria');

      return View('auxiliares.ligas.create', compact('clubs', 'ligas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LigaStoreRequest $request)
    {
        $liga = Liga::create($request->all());

        return redirect()->route('ligas.index')->with('info', 'Liga creada con éxito');
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
      $ligas = Liga::find($id);

      return View('auxiliares.ligas.edit', compact('clubs', 'ligas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LigaUpdateRequest $request, $id)
    {
      $liga = Liga::find($id);
      $liga->fill($request->all())->save();

      return redirect()->route('ligas.index')->with('info', 'Liga actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Liga::find($id)->delete();

      return back()->with('info', 'Liga eliminada con éxito');
    }
}
