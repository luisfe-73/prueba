<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RivalUpdateRequest extends FormRequest
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
        'nombre_rival' => 'required|string|max:255',
        'localidad_rival' => '',
        'poblacion_rival' => '',
        'provincia_rival' => '',
        'pais_rival' => '',
        'comentario_rival' => '',
     ];
    }
}
