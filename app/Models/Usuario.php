<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'usu_id';
    const CREATED_AT = 'usu_created_at';
    const UPDATED_AT = 'usu_updated_at';
    protected $guarded = [];

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

    protected $hidden = [
        'password',
    ];

    // Relación uno a muchos (inversa)
    public function rol() {
        return $this->belongsTo('App\Models\Rol');
    }

    // Relación 1 a muchos
    public function apps() {
        return $this->hasMany('App\Models\App');
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
