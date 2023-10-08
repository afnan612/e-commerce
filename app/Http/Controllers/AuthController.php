<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        if (Auth::guard('admin')->check()){
            return redirect('admins');

        }
        return view('admin.auth.login');

//        return view('admin.auth.login');

    }

    public function login(Request $request)
    {
//        $this->validate($request, [
//            'email'   => 'required|email',
//            'password' => 'required|min:6'
//        ]);

        $data = $request->validate([
            'email'   =>'required|exists:admins',
            'password'=>'required'
        ],[
            'email.exists'      => 'Wrong E-mail',
            'email.required'    => 'Enter Your E-mail',
            'password.required' => 'Enter The Password',
        ]);

        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->intended('/home');
        }

        return back()->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('admin.LoginPage');
    }

}

