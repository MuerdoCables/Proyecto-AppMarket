<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $primaryKey = 'cat_id';
    const CREATED_AT = 'cat_created_at';
    const UPDATED_AT = 'cat_updated_at';
    protected $guarded = [];

    // Relación 1 a muchos
    public function aplicaciones() {
        return $this->hasMany('App\Models\Aplicacion');
    }

}
