<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class frontend_auth extends Authenticatable
{
  protected $table = 'users';
  protected $fillable = ['name', 'email', 'password','jabatan','foto','provider','provider_id','avatar','avatar_original'];

        protected $hidden = [
          'password', 'remember_token',
      ];
      public function setPasswordAttribute($password)
   {
   $this->attributes['password'] = bcrypt($password);
   }
}
