<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HeroController::class, 'index'])->name('home');

Route::resource('heros', HeroController::class);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [HeroController::class, 'index'])->name('home');
});