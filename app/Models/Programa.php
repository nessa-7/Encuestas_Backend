<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programa extends Model
{
    use HasFactory;

    protected $table = 'programa';
    protected $primaryKey = 'idPrograma';
    protected $fillable = ['nombrePrograma'];

    public function centroFormacion()
    {
        return $this->belongsTo(CentroFormacion::class, 'idCentroFormacion', 'idCentroFormacion');
    }

    public function responsables()
    {
        return $this->belongsToMany(Responsable::class, 'programa_responsable','idPrograma', 'idResponsable');
    }
    
    public function programaResponsables()
    {
        return $this->hasMany(ProgramaResponsable::class, 'idPrograma', 'idPrograma');
    }
}
