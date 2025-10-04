<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'idPersona'
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }


    //relaciones

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'idPersona', 'idPersona');
    }

    public function respuestasResponsable()
    {
        return $this->hasMany(RespuestasResponsable::class, 'id', 'idUsuario');
    }
}