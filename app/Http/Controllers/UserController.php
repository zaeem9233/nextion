<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile(){
        return view('pages.profile');
    }

    public function profile_update(Request $request){
        $request->validate([
            'name' => 'sometimes|required|string|min:3|max:50',
            'email' => 'sometimes|required|string|min:3|max:50'
        ]);

        $user = User::find(auth()->user()->id);
        $user->update($request->only(['email', 'name']));

        return back()->with('success', 'Profile info updated');
    }

    public function password_update(Request $request){
        $request->validate([
            'current_password' => 'sometimes|required|string|min:3|max:50',
            'password' => 'sometimes|required|confirmed|min:8'
        ]);

        $user = User::find(auth()->user()->id);

        //if user entered correct current password
        if(!Hash::check($request->current_password, $user->password)){
            return back()->with('error', 'Wrong current password');
        }

        $user->update($request->only(['password']));

        return back()->with('success', 'Password changed');
    }
}
