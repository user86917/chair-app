<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChairController;

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



Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [UserController::class, 'login']);
    Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('loginUser');

    Route::get('/register', [UserController::class, 'register']);
    Route::post('/users/create', [UserController::class, 'createUser'])->name('createUser');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [ChairController::class, 'index']);
    Route::get('/chair/{slug}', [ChairController::class, 'show']);
    Route::post('/createChair', [ChairController::class, 'createChair'])->name('createChair');
    Route::post('/logout',  [UserController::class, 'logout']);
});