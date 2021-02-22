<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users')->middleware("auth");
    Route::post('/users', [App\Http\Controllers\UsersController::class, 'create'])->middleware("auth");
    Route::delete('/users/{user}', [App\Http\Controllers\UsersController::class, 'destroy'])->middleware("auth");

    Route::get('/signatures', [App\Http\Controllers\SignatureController::class, 'index'])->middleware("auth");
    Route::get('/signatures/{user}', [App\Http\Controllers\SignatureController::class, 'show'])->middleware("auth");
    Route::get('/signatures/create/{user}', [App\Http\Controllers\SignatureController::class, 'create'])->middleware("auth");
    Route::post('/signatures/{user}', [App\Http\Controllers\SignatureController::class, 'store'])->middleware("auth");
});

Route::get('/', function () {
    return redirect('/login');
});