<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class cantidadOrganismoReporte extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'cantidad_organismos_reporte';
    
    protected $primaryKey = 'id_cantidad';

    protected $fillable = [
        'fk_detalletipo_tipoentidad', 'cantidad', 'fk_id_reporte'
        
    ];
    public $timestamps = false;
}