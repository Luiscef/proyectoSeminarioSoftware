<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'nombres',
        'apellidos',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function registrosSeguridad()
    {
        return $this->hasMany(RegistroSeguridad::class, 'usuario_id');
    }
}