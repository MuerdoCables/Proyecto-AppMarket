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
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    // Relación uno a muchos (inversa)
    public function aplicacion() {
        return $this->belongsTo('App\Models\Aplicacion');
    }

    // Relación 1 a muchos
    public function comentarios() {
        return $this->hasMany('App\Models\Comentario');
    }
}
