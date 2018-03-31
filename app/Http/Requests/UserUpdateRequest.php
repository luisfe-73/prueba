<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
         'nombre_user' => 'required|string|max:255',
         'apellidos_user' => 'required|string|max:255',
         'email' => 'required|string|email|max:255',
         'password' => 'required|string|min:6',
         'rol_user' => 'required|in:administrador,entrenador',
         'estado_user' => 'required|in:activo,inactivo',
         'direccion_completa_user' => '',
         'direccion_user' => '',
         'codigo_postal_user' => '',
         'poblacion_user' => '',
         'provincia_user' => '',
         'pais_user' => '',
         'telefono_user' => '',
         'foto_user' => 'mimes:jpg,jpeg,png',
         'ficha_user' => 'mimes:jpg,jpeg,png',
      ];
    }
}
