<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacione extends Model
{
    protected $fillable = [
        'puntos',
        'participante_id',
        'user_id',
        'periodo_id',
        'item_id'
    ];


}
