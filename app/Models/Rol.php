<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    
    protected $table = 'roles';
    protected $primaryKey = 'rol_id';
    const CREATED_AT = 'rol_created_at';
    const UPDATED_AT = 'rol_updated_at';
    protected $guarded = [];

    // Relación 1 a muchos
    public function usuarios() {
        return $this->hasMany('App\Models\Usuario');
    }
}
