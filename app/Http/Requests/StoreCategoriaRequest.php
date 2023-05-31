<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Determina si el usuario está autorizado a realizar esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * Obtiene las reglas de validación que se aplican a la solicitud.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'cat_nombre' => 'required|unique:categorias,cat_nombre|max:255',

            'cat_id' => 'prohibited',
            'cat_created_at' => 'prohibited',
            'cat_updated_at' => 'prohibited',
        ];
    }

    // Cambia el nombre del campo en los mensajes predeterminados
    public function attributes()
    {
        return [
            'cat_id' => 'CATEGORÍA',

            'cat_nombre' => 'categoría',

            'cat_created_at' => 'F.creado',
            'cat_updated_at' => 'F.grabado',
        ];
    }

    // Mensajes de error personalizados
    public function messages() 
    {
        return [
            //
        ];
    }
}
