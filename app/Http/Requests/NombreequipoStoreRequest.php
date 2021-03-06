<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NombreequipoStoreRequest extends FormRequest
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
        'nombre_nombreequipo' => 'required|string|max:255|unique:nombreequipos',
        'comentario_nombreequipo' => '',
     ];
    }
}
