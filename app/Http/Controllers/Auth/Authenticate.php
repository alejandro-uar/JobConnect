<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Controller
{
   
   public function get_form(){
        return view('auth.login');
   }
   
    public function authenticate(Request $request)
   {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('index');
        }

        return redirect('no-autorizado');
   }

   public function logout(Request $request)
   {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
   }
   
}