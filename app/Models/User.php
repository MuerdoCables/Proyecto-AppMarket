<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $guarded = [
        // 'remember_token',
        // 'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    /*--------------------------------- FUNCIONES --------------------------------------*/

    // Valores predeterminados
    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->rol)) $model->rol = 1;
            if (empty($model->ban)) $model->ban = false;
            // if (empty($model->pais)) {
            //     $ip = request()->ip();
            //     $country = geoip()->getLocation($ip);
            //     $model->foto = $ip;
            //     if ($country->default == false) $model->pais = $country->country;
            // }
        });
    }

    /*--------------------------------- RELACIONES --------------------------------------*/

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
