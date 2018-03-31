<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorStoreRequest extends FormRequest
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
         'nombre_jugador' => 'required|string|max:255',
         'apellidos_jugador' => 'required|string|max:255',
         'nombre_futbol' => '',
         'fecha_nacimiento_jugador' => '',
         'direccion_completa_jugador' => '',
         'direccion_jugador' => '',
         'codigo_postal_jugador' => '',
         'poblacion_jugador' => '',
         'provincia_jugador' => '',
         'pais_jugador' => '',
         'telefono_jugador' => '',
         'foto_jugador' => 'mimes:jpg,jpeg,png',
         'estado_jugador' => 'required|in:activo,inactivo',
         'contacto_padre_jugador' => '',
         'contacto_madre_jugador' => '',
         'contacto_otro1_jugador' => '',
         'contacto_otro2_jugador' => '',
         'comentario_jugador' => '',
     ];
    }
}
