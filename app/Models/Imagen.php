<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';


    // Relación con la agenda (una imagen puede estar en varias agendas)
    public function agendas()
    {
        return $this->hasMany(Agenda::class, 'idimagen');
    }
}
