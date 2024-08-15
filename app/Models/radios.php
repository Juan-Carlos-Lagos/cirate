<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class radios extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'idradio',
        'aliasradio'
    ]; // Columnas que se pueden llenar masivamente

    
}
