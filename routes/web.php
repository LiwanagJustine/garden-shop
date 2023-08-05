<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[AppController::class, 'index'])->name('app');
Route::get('/',[LandingController::class, 'index'])->name('landing');
Route::get('/sign-in', [SigninController::class, 'index'])->name('signin');
Route::get('/sign-up', [SignupController::class, 'index'])->name('signup');






//
