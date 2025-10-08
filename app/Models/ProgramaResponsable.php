<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaResponsable extends Model
{
    use HasFactory;

    protected $table = 'programa_responsable';
    protected $primaryKey = 'idProgramaResponsable';
    public $timestamps = true;

    protected $fillable = [
        'idPrograma',
        'idResponsable',
    ];

    // 🔗 Relación con Programa
    public function programa()
    {
        return $this->belongsTo(Programa::class, 'idPrograma', 'idPrograma');
    }

    // 🔗 Relación con Responsable
    public function responsable()
    {
        return $this->belongsTo(Responsable::class, 'idResponsable', 'idResponsable');
    }
}
