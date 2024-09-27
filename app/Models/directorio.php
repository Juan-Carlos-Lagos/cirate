<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directorio extends Model
{
    use HasFactory;


    protected $table = "directorio";

    protected $primaryKey = 'id_directorio';

    protected $fillable = ['id_directorio', 'nombre','telefono','ciudad','direccion','comentario'];

    public $timestamps = false;


}
