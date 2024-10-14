<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('pages.home', ['users' => User::all()]);
});

Route::controller(LoginController::class)->prefix('login')->group(function () {
  /**
   * /login get - page (index)
   * /login post - for login user (login)
   */
  Route::get('/', 'index');
  Route::post('/', 'login');
});

Route::controller(RegisterController::class)->prefix('register')->group(function () {
  /**
   * /register get - page (index)
   * /register post - for register user (register)
   */
  Route::get('/', 'index');
  Route::post('/', 'register');
});
