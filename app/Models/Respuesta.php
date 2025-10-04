<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = 'respuesta';
    protected $primaryKey = 'idRespuesta';
    public $timestamps = false;
    protected $fillable = ['idPregunta','textoRespuesta'];

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class, 'idPregunta', 'idPregunta');
    }

    public function respuestasResponsables()
    {
        return $this->hasMany(RespuestasResponsable::class, 'idRespuesta', 'idRespuesta');
    }
}
