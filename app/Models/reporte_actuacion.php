<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class reporte_actuacion extends Model
{
    use HasFactory;

    protected $table = "reporte_actuacion";
    protected $primaryKey = 'id_reporte';

    protected $fillable = [
        'hora_salida', 'hora_llegada', 'hora_ingreso','duracion_actuacion',
        'departamento','municipio','ciudad','direccion','barrio'

    ];

    public $timestamps = false;
}
