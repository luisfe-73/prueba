<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use DB;
use App\Club;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //meto en variable lo que traigo del buscador
      $busca_name=$request->input('busca_name');
      $clubs = Club::get();
      //hago la consulta y la devuelvo
      //se mandan los datos relacionados del jugador con la poblacion y el contacto
      $users = User::where('nombre_user', "LIKE", "%$busca_name%")->orderBy('nombre_user', 'ASC')->paginate(21);

      return View('admin.users.index', compact('clubs', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clubs = Club::get();
      $users = User::orderBy('id', 'DESC')->get();

      return View('admin.users.create', compact('clubs', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
      //recibo todos los datos del request
      $user = User::create($request->all());
      //saco el password del request y la encripto
      $pass = bcrypt($request->password);
      //si recibo imagenes las guardo en carpeta
      if($request->file('foto_user')){
         $foto_user = Storage::disk('public')->put('images/entrenadores', $request->file('foto_user'));
         $user->fill(['foto_user' => asset($foto_user)])->save();
      }
      //si recibo imagenes las guardo en carpeta
      if($request->file('ficha_user')){
         $ficha_user = Storage::disk('public')->put('images/entrenadores', $request->file('ficha_user'));
         $user->fill(['ficha_user' => asset($ficha_user)])->save();
      }
      //actualizo el campo password por el encriptado
      $user->fill(['password' => $pass])->save();

      return redirect()->route('users.index')->with('info', 'Entrenador creado con éxito');
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
      $users = User::find($id);

      return View('admin.users.edit', compact('clubs', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
      //busco el usuario por el id del request
      $user = User::find($id);
      //saco el password del request y la encripto
      $pass = bcrypt($request->password);
      //si recibo imagenes las guardo en carpeta
      if($request->file('foto_user')){
         $foto_user = Storage::disk('public')->put('images/entrenadores', $request->file('foto_user'));
         $user->fill(['foto_user' => asset($foto_user)])->save();
      }
      //si recibo imagenes las guardo en carpeta
      if($request->file('ficha_user')){
         $ficha_user = Storage::disk('public')->put('images/entrenadores', $request->file('ficha_user'));
         $user->fill(['ficha_user' => asset($ficha_user)])->save();
      }
      //actualizo el campo password por el encriptado
      $user->fill(['password' => $pass])->save();

      return redirect()->route('users.index')->with('info', 'Entrenador actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User::find($id)->delete();

      return back()->with('info', 'Entrenador eliminado con éxito');
    }
}
