<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginCheck(Request $request){
        $request->validate(
            [
                'email' => 'required|email|min:5|max:50',
                'password' => 'required|max:50'
            ]
        );

        if(\Auth::attempt($request->only('email', 'password'))){
            $request->session()->regenerate();
            echo 'Yes';
            return redirect()->intended('/dashboard')->with(['success'=>'Logged in successfully']);

        }

        return redirect()->back()->with(['error'=>'Email or Password not matched.'])->withInput();

    }

    public function logout(Request $request){
        auth()->logout();
        return redirect()->route('home')->with(['success' => 'Logout successfully.']);
    }
}