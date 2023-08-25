<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/login', [AuthController::class, 'redirectLogin'])->name('gotoLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'redirectRegister'])->name('gotoRegister')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('detail/{id}', [HomeController::class, 'showDetail'])->name('details')->middleware('auth');
// Route::get('/', function () {
//     return view('welcome');
// });
