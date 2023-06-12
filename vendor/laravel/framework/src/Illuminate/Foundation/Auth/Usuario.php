<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Usuario extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail;

    /**
     * Get the password for the user.
     * Obtiene la contraseña del usuario.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->usu_password;
    }

     /**
     * Determine if the user has verified their email address.
     * Determina si el usuario ha verificado su dirección de correo electrónico.
     *
     * @return bool
     */
    public function hasVerifiedEmail()
    {
        return ! is_null($this->usu_email_verified_at);
    }

    /**
     * Mark the given user's email as verified.
     * Marca el correo electrónico del usuario dado como verificado.
     *
     * @return bool
     */
    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'usu_email_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

    /**
     * Get the email address that should be used for verification.
     * Obtiene la dirección de correo electrónico que debe utilizarse para la verificación.
     *
     * @return string
     */
    public function getEmailForVerification()
    {
        return $this->usu_email;
    }
}
