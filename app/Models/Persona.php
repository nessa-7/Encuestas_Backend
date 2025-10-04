<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'idPersona';
    public $timestamps = false;
    protected $fillable = ['nombres','apellidos','genero','fechaNacimiento','celular','ciudad'];

    public function usuario()
    {
        return $this->hasOne(User::class, 'idPersona', 'idPersona');
    }
}
