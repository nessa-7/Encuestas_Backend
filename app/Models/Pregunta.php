<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';
    protected $primaryKey = 'idPregunta';
    public $timestamps = false;
    protected $fillable = ['idCuestionario','textoPregunta','tipoPregunta'];

    public function cuestionario()
    {
        return $this->belongsTo(Cuestionario::class, 'idCuestionario', 'idCuestionario');
    }

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class, 'idPregunta', 'idPregunta');
    }
}
