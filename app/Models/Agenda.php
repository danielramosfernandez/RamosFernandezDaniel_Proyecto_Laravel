<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['idpersona', 'idimagen', 'fecha', 'hora'];

    // Relación con el modelo Persona
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'idpersona');
    }

    // Relación con el modelo Imagen
    public function imagen()
    {
        return $this->belongsTo(Imagen::class, 'idimagen');
    }
}
