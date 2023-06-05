<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Usuario as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'usu_id';
    const CREATED_AT = 'usu_created_at';
    const UPDATED_AT = 'usu_updated_at';
    protected $guarded = [
        'usu_password',
        'usu_remember_token',
        'usu_email_verified_at',
    ];

    protected $rememberTokenName = 'usu_remember_token';
    protected $email_verified_at = 'usu_email_verified_at';
    protected $email = 'usu_email';
    protected $password = 'usu_password';
    

    // Valores predeterminados
    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->usu_rol_id)) $model->usu_rol_id = 1;
            if (empty($model->usu_ban)) $model->usu_ban = false;
            // if (empty($model->usu_pais)) {
            //     $ip = request()->ip();
            //     $country = geoip()->getLocation($ip);
            //     $model->usu_foto = $ip;
            //     if ($country->default == false) $model->usu_pais = $country->country;
            // }
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'usu_password',
        'usu_remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'usu_email_verified_at' => 'datetime',
    ];

    // Relación uno a muchos (inversa)
    public function rol() {
        return $this->belongsTo('App\Models\Rol');
    }

    // Relación 1 a muchos
    public function aplicaciones() {
        return $this->hasMany('App\Models\Aplicacion');
    }

    // Relación 1 a muchos
    public function valoraciones() {
        return $this->hasMany('App\Models\Valoracion');
    }

    // Relación 1 a muchos
    public function comentarios() {
        return $this->hasMany('App\Models\Comentario');
    }
}
