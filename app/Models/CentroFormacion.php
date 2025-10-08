<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CentroFormacion extends Model
{
    use HasFactory;

    protected $table = 'centroformacion';
    protected $primaryKey = 'idCentroFormacion';
    protected $fillable = ['nombre'];

    public function respuestasresponsable()
    {
        return $this->hasMany(RespuestasResponsable::class, 'idCentroFormacion', 'idCentroFormacion');
    }

    public function programa()
    {
        return $this->hasMany(Programa::class, 'idCentroFormacion', 'idCentroFormacion');
    }
}
