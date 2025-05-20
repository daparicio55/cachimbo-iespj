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

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function participante()
    {
        return $this->belongsTo(Participante::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
