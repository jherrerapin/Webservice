<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    public $table = 'peliculas';

    protected $fillable = [
        'nombre',
        'duracion',
        'categoria',
        'fecha_estreno',
        'poster_estreno'
    ];
}
