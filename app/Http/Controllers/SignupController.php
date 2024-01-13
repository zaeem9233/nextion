<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\Mail\UserEmailVerifyMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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

        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = Str::random(64, $characters);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'email_verify_token' => $randomString,
        ]);

        //call event to send email
        event(new UserRegistered($user));

        if(\Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard')->with('success', 'Account created successfully');
        }

        return back()->with(['error', 'Something error occur try again'])->withInput();
    }

}
