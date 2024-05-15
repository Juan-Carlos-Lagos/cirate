<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datos_victimas_rescatados extends Model
{
    use HasFactory;


    protected $table = "public.datos_victimas_rescatados";

    protected $fillable = ['nombre_persona', 'tipo_documento','numero_documento','tipo_edad','edad_persona','lesion','enfermedad','muerte'];


    public function reporte_actuacion()
    {
        return $this->hasMany(reporte_actuacion::class);
    }
}
