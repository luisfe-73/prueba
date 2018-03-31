<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoStoreRequest extends FormRequest
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
        'nombreequipo_id' => 'required',
        'liga_id' => 'required',
        'temporada' => 'required',
        'categoria_equipo' => 'required',
        'user_id' => 'required',
        'foto_equipo' => 'mimes:jpg,jpeg,png',
        'comentario_equipo' => '',
     ];
    }
}
