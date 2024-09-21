<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class detalleTipo extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'detalle_tipo';
    
    protected $primaryKey = 'id_detalle';

    protected $fillable = [
        'id_detalle','fk_id_tipo', 'nombre', 'descripcion', 'fecha_creacion'
        
    ];
    public $timestamps = false;
}