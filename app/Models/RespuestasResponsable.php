<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespuestasResponsable extends Model
{
    protected $table = 'respuestas_responsables';
    protected $primaryKey = 'idRespuestasResponsable';
    public $timestamps = false;
    protected $fillable = ['idRespuesta','idUsuario','idResponsable','fechaRespuesta','idPersonaEvaluada','idCentroFormacion'];

    public function respuesta()
    {
        return $this->belongsTo(Respuesta::class, 'idRespuesta', 'idRespuesta');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'idUsuario', 'id');
    }

    public function responsable()
    {
        return $this->belongsTo(Responsable::class, 'idResponsable', 'idResponsable');
    }

    public function personaEvaluada()
    {
        return $this->belongsTo(Responsable::class, 'idPersonaEvaluada', 'idResponsable');
    }

    public function centroFormacion()
    {
        return $this->belongsTo(CentroFormacion::class, 'idCentroFormacion', 'idCentroFormacion');
    }

}
