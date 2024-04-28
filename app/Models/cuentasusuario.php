<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuentasusuario extends Model
{
    use HasFactory;

    protected $table = "public.cuentasusuario";

    protected $fillable = [
        'login', 'nombreusuario', 'tipousuario','password'
    ];


}
