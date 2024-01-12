<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerSave(Request $request){
        $request->validate(
            [
                'name' => 'required|string|min:3|max:30',
                'email' => 'required|email|max:50|unique:users',
                'password' => 'required|min:8|confirmed',
            ],
            [
                'name.required' => 'Full name is required',
                'email.unique' => 'User with this email already registered',
                'password.confirmed' => 'Password not matched with confirm password',
            ]
        );

        $user = User::create($request->only('name', 'email', 'password'));

        if(\Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('home');
        }

        return back()->with(['error', 'Something error occur try again'])->withInput();
    }

}
