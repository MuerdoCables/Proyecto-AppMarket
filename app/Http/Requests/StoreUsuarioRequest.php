<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
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
            'usu_username' => 'required|unique:usuarios,usu_username|max:255',
            'usu_email' => 'required|unique:usuarios,usu_email|email|max:255',
            'usu_password' => 'required|min:4|max:255',

            'usu_id' => 'prohibited',
            'usu_rol_id' => 'prohibited',
            'usu_created_at' => 'prohibited',
            'usu_updated_at' => 'prohibited',
        ];
    }

    // Cambia el nombre del campo en los mensajes predeterminados
    public function attributes()
    {
        return [
            'usu_id' => 'USUARIO',

            'usu_username' => 'nombre de usuario',
            'usu_email' => 'email',
            'usu_password' => 'contraseña',

            'usu_nombre' => 'nombre',
            'usu_apellidos' => 'apellidos',
            'usu_descripcion' => 'descripción',
            'usu_foto' => 'foto del perfil',
            'usu_fenacimiento' => 'fecha de nacimiento',
            'usu_telefono' => 'teléfono',
            'usu_pais' => 'país',
            'usu_rol_id' => 'rol',
            'usu_ban' => 'baneado',
            'usu_created_at' => 'F.creado',
            'usu_updated_at' => 'F.grabado',
        ];
    }

    // Mensajes de error personalizados
    public function messages() 
    {
        return [
            'usu_username.required' => 'El nombre de usuario es obligatorio.',
            'usu_username.unique' => 'El nombre de usuario ya está en uso.',
            'usu_email.required' => 'El correo electrónico es obligatorio.',
            'usu_email.email' => 'El correo electrónico debe ser válido.',
            'usu_email.unique' => 'El correo electrónico ya está en uso.',
            'usu_password.required' => 'La contraseña es obligatoria.',
            'usu_password.min' => 'La contraseña debe tener al menos 4 caracteres.',
        ];
    }
}
