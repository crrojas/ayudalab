<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rut_inst', 'superuser'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $casts = ['superuser' => 'boolean'];

    public function aviso()
    {
        return $this->hasMany('aviso');
    }
    public function institucion()
    {
        return $this->belongsTo('institucion');
    }
    public function superuser(){
        return $this->superuser;
    }
}
