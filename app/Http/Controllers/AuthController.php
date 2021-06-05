<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function proses(Request $request){
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) { 
            return redirect('/admin');

        } else { 
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}
