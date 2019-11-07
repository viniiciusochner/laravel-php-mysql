<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{

   protected $fillable = [
       'name', 'email', 'password',

   ];


   protected $hidden = [
       'password', 'remember_token',
   ];


   public function getJWTIdentifier()
   {
       return $this->getkey();
   }

   public function getJWTCustomClaims()
   {
       return [];
   }
}
