<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function profile(){
        return view('auth.profile');
    }
    public function login_post(Request $request){
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::where('email', $request->email)->first();
            Auth::login($user);
            return view('frontend.home');
        }
        return redirect()->back()->with('error', '!Invalid Credential');
    }
    public function update_profile(Request $request){
        $user = User::first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->contact_email = $request->contact_email;
        $user->number = $request->number;
        $user->save();
        return redirect()->back()->with('success', 'Updated Successfully');
    }
    public function register(){
        return view('auth.register');
    }
}
