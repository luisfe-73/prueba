<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantillaUpdateRequest extends FormRequest
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
        'equipo_id' => '',
        'jugador_id' => '',
        'foto_jugador_equipo' => 'mimes:jpg,jpeg,png',
        'rol_jugador_equipo' => 'required',
        // 'edad_jugador_equipo' => '',
        'peso_jugador_equipo' => '',
        'altura_jugador_equipo' => '',
        'ficha_jugador_equipo' => 'mimes:jpg,jpeg,png',
        'club_procede_id' => 'required',
     ];
    }
}
