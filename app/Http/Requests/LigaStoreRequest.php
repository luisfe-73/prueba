<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LigaStoreRequest extends FormRequest
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
        'nombre_liga' => 'required|string|max:255|unique:ligas',
        'categoria_liga' => 'required',
        'comentario_liga' => '',
     ];
    }
}
