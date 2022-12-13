<?php

namespace App\Modules\Client\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Client extends  Authenticatable
{
    protected $fillable=['civilité','email','telephone','mobile','pays','ville','rue','refnom','name','password'];
}
