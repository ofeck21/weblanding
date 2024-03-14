<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function login()
   {
       return view('auth.login');
   }

   public function loginProcess(Request $request)
   {
       $request->validate([
           'email' => 'required|email',
           'password' => 'required',
       ]);

       $credentials = $request->only('email', 'password');

       if (Auth::attempt($credentials)) {
           return redirect()->route('dashboard');
       }

       return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
   }

   public function logout()
   {
       Auth::logout();
       return redirect()->route('login');
   }
}
