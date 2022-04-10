<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class admin  extends Authenticatable implements JWTSubject
{
    //
    protected $table='admin';

    public function getJWTIdentifier()

    {

        return $this->getKey();

    }

    public function getJWTCustomClaims()

    {

        return ['role'=>'admin'];

    }
}
