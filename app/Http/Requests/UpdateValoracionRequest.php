<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UpdateValoracionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Determina si el usuario está autorizado a realizar esta solicitud.
     */
    public function authorize(): bool
    {
        if (Auth::check() == false) return false;
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
            // 'val_app_id' => 'required|exists:aplicaciones,app_id|numeric|min:0',
            // 'val_usu_id' => 'required|exists:users,id|numeric|min:0',
            'val_puntuacion' => 'required|numeric|min:0|max:5',
            'val_texto' => '',

            // Regla de validación unique para la combinación de val_usu_id y val_app_id
            // 'val_usu_id' => [
            //     'required',
            //     'exists:users,id',
            //     'numeric',
            //     'min:0',
            //     Rule::unique('valoraciones', 'val_usu_id')->where('val_app_id', $this->val_app_id);
            // ],

            'val_id' => 'prohibited',
            'val_app_id' => 'prohibited',
            'val_usu_id' => 'prohibited',
            'val_created_at' => 'prohibited',
            'val_updated_at' => 'prohibited',
        ];
    }

    // Cambia el nombre del campo en los mensajes predeterminados
    public function attributes()
    {
        return [
            'val_id' => 'VALORACIÓN',

            'val_app_id' => 'app',
            'val_usu_id' => 'usuario',
            'val_puntuacion' => 'puntuación',
            'val_texto' => 'texto',

            'val_created_at' => 'F.creado',
            'val_updated_at' => 'F.grabado',
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
