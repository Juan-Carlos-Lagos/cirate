<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reporte_actuacion extends Model
{
    use HasFactory;

    protected $table = "public.reporte_actuacion";

    protected $fillable = [
        'reporte_numero', 'fecha_alta_reporte', 'hora_alta_reporte'
    ];

    // public function datos_victimas_rescatados()
    // {
    //     return $this->morphMany(datos_victimas_rescatados::class, 'reporte_actuacion_idreporte_actuacion');
    // }



}
