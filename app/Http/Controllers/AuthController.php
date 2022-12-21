<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index(){
        return view('home.user.userpage');
    }
    public function login(){
        return view('home.user.userlogin');
    }
    public function register(){
        return view('home.user.userregister');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password'=>'required|min:3'
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('home.index')->with('success', 'Hoşgeldiniz ' . Auth::user()->name);
        }
        return redirect()->route('home.user.login')->withErrors('Email adresi veya şifre hatalı!');

    }

    public function signup(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email' => 'required|email|unique:users',
            'password'=>'required|min:3'
        ]);

        $user=new User();
        $user->name =$request->input('name');
        $user->email =$request->input('email');
        if (isset($request->password)){
            $user->password=Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('home.user.login');

    }

    public function logout(){
        Auth::logout();
        return redirect("/");
    }

}
