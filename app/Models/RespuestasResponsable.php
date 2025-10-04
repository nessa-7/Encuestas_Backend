<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespuestasResponsable extends Model
{
    protected $table = 'respuestasResponsable';
    protected $primaryKey = 'idRespuestasResponsable';
    public $timestamps = false;
    protected $fillable = ['idRespuesta','idUsuario','idResponsable','fechaRespuesta'];

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
}
