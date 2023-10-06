<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        if(auth('admin')->check()){
            return 'مسجل';
        }
        else
            return 'غير مسجل';
    }
}
