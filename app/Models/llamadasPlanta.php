<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class llamadasplanta extends Model
{
    use HasFactory;
    protected $table = 'llamadas_planta';
    protected $primaryKey = 'id_llamada';
    

    protected $fillable = [
        'fk_id_detalle_tipo_llamada', 'fk_id_audios', 'fk_id_radio', 'cantidad_timbres', 'acc', 'code', 'cd', 'ext', 'co', 'dial'
    ];

    public $timestamps = false;

    public function audio()
    {
        return $this->belongsTo(Audios::class, 'fk_id_audios', 'id_audio');
    }
}
