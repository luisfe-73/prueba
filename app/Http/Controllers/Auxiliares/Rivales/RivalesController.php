<?php

namespace App\Http\Controllers\Auxiliares\Rivales;

use Illuminate\Http\Request;
use App\Http\Requests\RivalStoreRequest;
use App\Http\Requests\RivalUpdateRequest;
use App\Http\Controllers\Controller;
use App\Club;
use App\Rival;

class RivalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clubs = Club::get();
      $rivales = Rival::all();

      return View('auxiliares.rivales.index', compact('clubs', 'rivales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clubs = Club::get();
      $rivales = Rival::orderBy('id', 'DESC')->get();

      return View('auxiliares.rivales.create', compact('clubs', 'rivales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RivalStoreRequest $request)
    {
      $rival = Rival::create($request->all());

      return redirect()->route('rivales.index')->with('info', 'Rival creado con éxito');
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
      $rivales = Rival::find($id);

      return View('auxiliares.rivales.edit', compact('clubs', 'rivales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RivalUpdateRequest $request, $id)
    {
      $rival = Rival::find($id);
      $rival->fill($request->all())->save();

      return redirect()->route('rivales.index')->with('info', 'Rival actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Rival::find($id)->delete();

      return back()->with('info', 'Rival eliminado con éxito');
    }
}
