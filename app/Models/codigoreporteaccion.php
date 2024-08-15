<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class codigoreporteaccion extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'codigoreporteaccion';

    protected $fillable = [
        'codigo','fecha', 'diasemana', 'hora', 'fktelefonollamada', 'fknombrellamada'
        
    ];
}
