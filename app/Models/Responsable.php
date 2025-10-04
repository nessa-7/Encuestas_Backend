<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = 'responsable';
    protected $primaryKey = 'idResponsable';
    public $timestamps = false;
    protected $fillable = ['nombre','correoElectronico','ficha','jornada'];

    public function respuestasResponsable()
    {
        return $this->hasMany(RespuestasResponsable::class, 'idResponsable', 'idResponsable');
    }
}
