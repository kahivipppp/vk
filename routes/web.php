<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/signup', [PagesController::class, 'signup'])->name('signup');
Route::post('/signup_post', [AdminController::class, 'signup_post'])->name('signup_post');

Route::get('/signin', [PagesController::class, 'signin'])->name('signin');
Route::post('/signin_post', [AdminController::class, 'signin_post'])->name('signin_post');

Route::get('/about', [PagesController::class, 'about'])->name('about');