<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    // Campos que se pueden llenar masivamente
    protected $fillable = ['name', 'movie_id', 'description', 'picture'];

    // Relación con el modelo Pelicula
    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class, 'movie_id');
    }
}