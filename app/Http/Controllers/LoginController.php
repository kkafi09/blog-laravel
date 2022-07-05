<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => "Login",
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password' => 'required|min:5|max:255'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended("/home");
        }

        return back()->with('loginError', "Login failed");
    }
}
