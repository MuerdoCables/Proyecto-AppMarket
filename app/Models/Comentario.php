<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';
    protected $primaryKey = 'com_id';
    const CREATED_AT = 'com_created_at';
    const UPDATED_AT = 'com_updated_at';
    protected $guarded = [];

    // Relación uno a muchos (inversa)
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    // Relación uno a muchos (inversa)
    public function valoracion() {
        return $this->belongsTo('App\Models\Valoracion');
    }
}
