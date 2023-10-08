<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

//use Illuminate\Contracts\Auth\Authenticatable;
//use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

//class Admin extends Model

class Admin extends Authenticatable

{



    protected $guarded = [];
    protected $table ='admins';
    protected $hidden = [
        'password',
    ];
    use HasFactory;
}
