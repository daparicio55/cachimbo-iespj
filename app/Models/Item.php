<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'puntaje_maximo',
        'traje_id'
    ];
    public function traje(){
        return $this->belongsTo(Traje::class);
    }
}
