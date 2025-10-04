<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    protected $table = 'cuestionario';
    protected $primaryKey = 'idCuestionario';
    public $timestamps = false;
    protected $fillable = ['titulo','descripcion','fechaCreacion','fechaVigencia'];

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class, 'idCuestionario', 'idCuestionario');
    }
}
