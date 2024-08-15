<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro_planta extends Model
{
    use HasFactory;
    protected $table = 'registro_planta';
    public $timestamps = false;

    protected $fillable = [
        'date', 'time', 'ext', 'co', 'dial', 'ring', 'duration', 'acc', 'code', 'cd'
    ];
}
