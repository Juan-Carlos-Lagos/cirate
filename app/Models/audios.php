<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class audios extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'audios';
    
    protected $primaryKey = 'id_audio';

    protected $fillable = [
        'id_audio','nombre', 'fecha_recepcion', 'hora_recepcion', 'fecha_finalizacion','ruta','duracion'
        
    ];
    public $timestamps = false;
}