<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\Jugador;
use App\User;
use App\Partido;
use App\Equipo;
use App\Nombreequipo;
use App\Rival;
use App\Liga;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clubs = Club::get();
      $jugadores = Jugador::where(['estado_jugador' => 'activo'])->get()->count();
      $entrenadores = User::where(['estado_user' => 'activo'])->get()->count();
      $nombreequipos = Nombreequipo::count();
      $rivales = Rival::count();
      $ligas = Liga::count();
      $equipos = Equipo::count();
      $partidos = Partido::count();
      return view('home', compact('clubs', 'jugadores', 'entrenadores', 'nombreequipos', 'rivales', 'ligas', 'equipos', 'partidos'));
    }
}
