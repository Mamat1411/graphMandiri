<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('Login/login');
    }

    public function postLogin(Request $request)
    {
        $request -> validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request -> only('username', 'password'))) {
            return redirect('/beranda');
        }

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
