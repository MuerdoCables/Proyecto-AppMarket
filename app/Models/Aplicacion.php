<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicacion extends Model
{
    use HasFactory;

    protected $table = 'aplicaciones';
    protected $primaryKey = 'app_id';
    const CREATED_AT = 'app_created_at';
    const UPDATED_AT = 'app_updated_at';
    protected $guarded = [];

    // Valores predeterminados
    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->app_obsoleto)) $model->app_obsoleto = false;
        });
    }

    // Relación uno a muchos (inversa)
    public function usuario() {
        return $this->belongsTo('App\Models\Usuario');
    }

    // Relación 1 a muchos
    public function valoraciones() {
        return $this->hasMany('App\Models\Valoracion');
    }
    
    // Relación uno a muchos (inversa)
    public function categoria() {
        return $this->belongsTo('App\Models\Categoria');
    }

}
