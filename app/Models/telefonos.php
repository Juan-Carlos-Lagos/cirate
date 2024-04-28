<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telefonos extends Model
{
    use HasFactory;


    protected $table = "public.telefonos";

    protected $fillable = ['numero','cliente','direccion','no_deseado','ciudad','comentario'];


}
