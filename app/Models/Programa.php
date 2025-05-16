<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    //
    public function participantes()
    {
        return $this->hasMany(Participante::class);
    }
}
