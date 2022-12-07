<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table="users";
    protected $primaryKey="id";
    protected $fillable = ['id', 'cedula','name', 'email', 'password'];

    public $timestamps=false;
}


  