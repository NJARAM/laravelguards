<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;


class Writer extends Authenticable
{
use Notifiable;
protected $guard='writer';

protected $fillable=['name','email','password',];

protected $hidden=['password','remembertoken',];

    //
}