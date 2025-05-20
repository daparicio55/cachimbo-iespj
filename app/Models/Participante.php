<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    //
    protected $fillable = [
        'nombres',
        'apellidos',
        'sexo',
        'programa_id',
        'periodo_id',
    ];

    public function programa()
    {
        return $this->belongsTo(Programa::class);
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class);
    }

    public function calificaciones()
    {
        return $this->hasMany(Calificacione::class);
    }
}
