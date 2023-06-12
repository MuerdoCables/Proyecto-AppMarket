<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'username' => [
                'required',
                'max:255',
                Rule::unique('users', 'username')->ignore($this->route('user')),
            ],
            'email' => [
                'required',
                'max:255',
                'email',
                Rule::unique('users', 'email')->ignore($this->route('user')),
            ],
            'password' => 'required|min:4|max:255',
            'nombre' => 'max:255',
            'apellidos' => 'max:255',
            'descripcion' => '',
            'foto' => 'max:255',
            'fecha_nacimiento' => 'date|nullable',
            'telefono' => 'integer|min:100000000|max:999999999|nullable',
            'pais' => 'max:255',
            'rol' => 'required|integer|exists:roles,rol_id',
            'ban' => 'boolean',

            'id' => 'prohibited',
            'created_at' => 'prohibited',
            'updated_at' => 'prohibited',
        ];
    }

    // Cambia el nombre del campo en los mensajes predeterminados
    public function attributes()
    {
        return [
            'id' => 'USUARIO',

            'username' => 'nombre de usuario',
            'email' => 'email',
            'password' => 'contraseña',
            'nombre' => 'nombre',
            'apellidos' => 'apellidos',
            'descripcion' => 'descripción',
            'foto' => 'foto del perfil',
            'fecha_nacimiento' => 'fecha de nacimiento',
            'telefono' => 'teléfono',
            'pais' => 'país',
            'rol' => 'rol',
            'ban' => 'baneado',

            'created_at' => 'F.creado',
            'updated_at' => 'F.grabado',
        ];
    }

    // Mensajes de error personalizados
    public function messages() 
    {
        return [
            'username.required' => 'El nombre de usuario es obligatorio.',
            'username.unique' => 'El nombre de usuario ya está en uso.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser válido.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 4 caracteres.',
        ];
    }
}
