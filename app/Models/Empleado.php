<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    // Los atributos que son asignables en masa.
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'paga_por_hora',
    ];

    // Relación uno a muchos con el modelo Hora
    public function horas()
    {
        return $this->hasMany(Hora::class);
    }
}

