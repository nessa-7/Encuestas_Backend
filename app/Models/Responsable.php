<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = 'responsables';
    protected $primaryKey = 'idResponsable';
    public $timestamps = false;
    protected $fillable = ['nombre','correoElectronico','ficha','jornada'];

    public function respuestasResponsable()
    {
        return $this->hasMany(RespuestasResponsable::class, 'idResponsable', 'idResponsable');
    }

    public function relacioninstructor()
    {
        return $this->hasMany(RespuestasResponsable::class, 'idPersonaEvaluada', 'idResponsable');
    }
}
