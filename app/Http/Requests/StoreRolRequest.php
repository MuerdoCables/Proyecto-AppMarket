<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRolRequest extends FormRequest
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
            'rol_id' => 'required|unique:roles,rol_id|integer|min:0',
            'rol_nombre' => 'required|unique:roles,rol_nombre|max:255',
            'rol_descripcion' => 'max:255',

            'rol_created_at' => 'prohibited',
            'rol_updated_at' => 'prohibited',
        ];
    }

    // Cambia el nombre del campo en los mensajes predeterminados
    public function attributes()
    {
        return [
            'rol_id' => 'código',
            'rol_nombre' => 'nombre del rol',
            'rol_descripcion' => 'descripción',

            'rol_created_at' => 'F.creado',
            'rol_updated_at' => 'F.grabado',
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
