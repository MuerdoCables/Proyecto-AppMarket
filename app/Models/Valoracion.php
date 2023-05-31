<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;

    protected $table = 'valoraciones';
    protected $primaryKey = 'val_id';
    const CREATED_AT = 'val_created_at';
    const UPDATED_AT = 'val_updated_at';
    protected $guarded = [];

    // Relación uno a muchos (inversa)
    public function usuario() {
        return $this->belongsTo('App\Models\Usuario');
    }

    // Relación uno a muchos (inversa)
    public function app() {
        return $this->belongsTo('App\Models\App');
    }

    // Relación 1 a muchos
    public function comentarios() {
        return $this->hasMany('App\Models\Comentario');
    }
}
