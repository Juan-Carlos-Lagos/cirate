<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conversaciones_radio extends Model
{
    use HasFactory;
 
    protected $table = 'conversaciones_radio';

    // Aquí se definen los campos que pueden ser asignados masivamente.
    protected $fillable = [
        'fechainicio',
        'horainicio',
        'fechafin',
        'horafin',
    
    ];

    // Si necesitas definir formatos de fechas
     protected $dates = [
         'fechainicio',
         'fechafin',
     ];

    
}
