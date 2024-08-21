<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;

    // Los atributos que son asignables en masa.
    protected $fillable = [
        'empleado_id',
        'fecha',
        'hora_entrada',
        'hora_salida',
    ];

    // Relación inversa muchos a uno con el modelo Empleado
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}

