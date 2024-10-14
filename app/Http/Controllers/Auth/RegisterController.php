<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function index()
  {
    return view('pages.auth.register');
  }

  public function register(Request $request)
  {
    $request->validate([
      'name' => 'required|min:2',
      'email' => 'required|min:4|email|unique:users,email',
      'password' => 'required|min:6|confirmed',
      'password_confirmation' => 'required|min:6',
    ]);

    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);

    return redirect('/');
  }
}
