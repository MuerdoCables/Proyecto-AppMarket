<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreComentarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Determina si el usuario está autorizado a realizar esta solicitud.
     */
    public function authorize(): bool
    {
        if (Auth::check() == false) return false;
        if (request()->com_usu_id != Auth::user()->id) return false;
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
            'com_val_id' => 'required|exists:valoraciones,val_id|numeric',
            'com_usu_id' => 'required|exists:users,id|numeric',
            'com_texto' => 'required',

            'com_id' => 'prohibited',
            'com_created_at' => 'prohibited',
            'com_updated_at' => 'prohibited',
        ];
    }

    // Cambia el nombre del campo en los mensajes predeterminados
    public function attributes()
    {
        return [
            'com_id' => 'COMENTARIO',

            'com_val_id' => 'valoración',
            'com_usu_id' => 'usuario',
            'com_texto' => 'texto',

            'com_created_at' => 'F.creado',
            'com_updated_at' => 'F.grabado',
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
