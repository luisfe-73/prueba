<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LigaUpdateRequest extends FormRequest
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
        'nombre_liga' => 'required|string|max:255',
        'categoria_liga' => 'required',
        'comentario_liga' => '',
     ];
    }
}
