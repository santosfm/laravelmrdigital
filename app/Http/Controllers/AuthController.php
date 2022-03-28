<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('login');
      }

    public function signin(Request $request){
        //dd($request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]) ) {
            //return redirect()->intended(route('showusers'));
            return redirect()->intended(route('showWelcomePage'));
        }
        return redirect()->back()->with('loginIncorrect','Login is incorrect');
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
