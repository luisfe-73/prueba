<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre_user' => 'required|string|max:255',
            'apellidos_user' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'rol_user' => 'required|in:administrador,entrenador',
            'estado_user' => 'required|in:activo,inactivo',
            'direccion_user' => '',
            'poblacion_id' => 'required|integer',
            'telefono_user' => '',
            'foto_user' => 'mimes:jpg,jpeg,png',
            'ficha_user' => 'mimes:jpg,jpeg,png',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre_user' => $data['nombre_user'],
            'apellidos_user' => $data['apellidos_user'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol_user' => $data['rol_user'],
            'estado_user' => $data['estado_user'],
            'direccion_user' => $data['direccion_user'],
            'poblacion_id' => $data['poblacion_id'],
            'telefono_user' => $data['telefono_user'],
            'foto_user' => $data['foto_user'],
            'ficha_user' => $data['ficha_user'],
        ]);
    }
}
