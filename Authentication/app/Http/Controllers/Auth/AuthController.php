<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);
        // dd($request->all());
        if(Auth::attempt($credentials)){
            return to_route('dashboard');
        }else{
            return back()->withErrors(['email','Invalid Credentials']);
        }
    }
    public function signup()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $validateData=$request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed|min:4'
        ]);
        // dd($request->all());

        $user=User::create($validateData);
        if($user)
        {
            return to_route('loginPg')->with('success','Successfully created the user!!');
        }else{
            return back()->withErrors($errors);
        }
    }
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerate();
        Auth::logout();
        return to_route('loginPg');
    }
}
