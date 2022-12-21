<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function index(){

  return view('layouts.admin');

}
    public function login(){
    return view('admin.login');
    }


  public function logincheck(Request $request){

  if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
    return redirect()->route('admin.index')->with('success','Tekrardan hoşgeldiniz '.Auth::user()->name);  //!!
  }

  return redirect()->route('admin.login')->withErrors('Email adresi veya şifre hatalı!');
}

  public function logout(){

    Auth::logout();
    return redirect()->route('admin.login');
}



}
