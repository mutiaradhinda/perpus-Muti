<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('home',[
        "title" =>"Home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" =>"About",
    ]);
});

Route::get('/blog', function () {
    return view('posts',[
        "title" =>"Blog",
    ]);
});

Route::get('/categories', function () {
    return view('category',[
        "title" =>"Categories",
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');