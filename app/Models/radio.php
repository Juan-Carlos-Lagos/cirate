<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class radio extends Model
{
    use HasFactory;
    protected $table = "radios";
    protected $primaryKey = 'id_radio';
    
    protected $fillable = [
        'id_radio',
        'serial',
        'alias'
    ];

    
}