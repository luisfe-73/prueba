<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidoStoreRequest extends FormRequest
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
        'equipo_id' => 'required',
        'rival_id' => 'required',
        'dia_partido' => 'required',
        'tipo_partido' => 'required',
        'condicion_partido' => 'required',
        'gol_equipo' => 'required',
        'gol_rival' => 'required',
        'resultado_partido' => 'required',
     ];
    }
}
