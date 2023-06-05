<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAplicacionRequest extends FormRequest
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
            'app_usu_id' => 'required|exists:usuarios,usu_id|numeric|min:0',
            'app_nombre' => [
                'required',
                'max:255',
                Rule::unique('aplicaciones', 'app_nombre')->ignore($this->route('aplicacion')),
            ],
            'app_icono' => 'required|max:255',
            'app_version' => 'max:15',
            'app_categoria' => 'required|exists:categorias,cat_nombre',
            'app_precio' => 'required|numeric|min:0',
            'app_ruta' => 'max:255',
            'app_enlace' => 'nullable|url|max:255',

            'app_id' => 'prohibited',
            'app_created_at' => 'prohibited',
            'app_updated_at' => 'prohibited',
        ];
    }

    // Cambia el nombre del campo en los mensajes predeterminados
    public function attributes()
    {
        return [
            'app_id' => 'APP',

            'app_usu_id' => 'usuario',
            'app_nombre' => 'nombre de la aplicación',
            'app_icono' => 'logotipo',
            'app_descripcion' => 'descripción',
            'app_version' => 'versión',
            'app_categoria' => 'categoría',
            'app_precio' => 'precio',
            'app_ruta' => 'aplicación',
            'app_enlace' => 'sitio web',
            
            'app_obsoleto' => 'obsoleto',
            'app_created_at' => 'F.creado',
            'app_updated_at' => 'F.grabado',
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
