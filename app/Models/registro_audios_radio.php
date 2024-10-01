<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class registro_audios_radio extends Model
{
    use HasFactory;
    protected $table = "registro_audios_radios";
    protected $primaryKey = 'id_registro_audio';

    protected $fillable = [
        'fk_id_radio',
        'fk_id_audio'
    ];
    public $timestamps = false;
}
