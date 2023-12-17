<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'seguimiento', 'anonimo', 'numero_identificacion', 'nombres', 'apellido_paterno', 'apellido_materno',
        'contacto', 'localidad', 'fecha', 'genero', 'edad', 'grupo', 'comentario', 'actividad', 'solicitud',
        'recibe', 'procesa', 'observacion',
    ];
}
