<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directorio extends Model
{
    use HasFactory;


    protected $table = "directorio";

    protected $fillable = ['id-directorio', 'nombre','telefono','ciudad','direccion','comentario'];


}
