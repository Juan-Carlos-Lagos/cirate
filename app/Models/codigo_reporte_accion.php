<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class codigo_reporte_accion extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'codigo_reporte_accion';

    protected $primaryKey = 'id_codigo_r';

    protected $fillable = [
        'id_codigo_r',
        'codigo',
        'fk_id_directorio',
        'fk_id_audio',
        'linea',
        'dia_semana',
        'fecha_creacion',
        'hora_creacion'

    ];
    public $timestamps = false;

    // para utilizar las llaves foraneas las tablas
    public function audios()
    {
        return $this->belongsTo(audios::class, 'fk_id_audio');
    }
    public function directorio()
    {
        return $this->belongsTo(Directorio::class, 'fk_id_directorio');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'fk_id_usuario');
    }
}
