<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    // Campos que se pueden llenar masivamente
    protected $fillable = ['name', 'classification', 'release_date', 'review'];

    // Relación con el modelo Personaje (si aplica)
    public function personajes()
    {
        return $this->hasMany(Personaje::class);
    }
}