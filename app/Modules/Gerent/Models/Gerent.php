<?php

namespace App\Modules\Gerent\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Gerent extends  Authenticatable
{use Notifiable;
    protected $guard = 'gerent';
    protected $fillable=['nom','prenom','image','email','adresse','password'];
    protected $hidden=['password'];

}
