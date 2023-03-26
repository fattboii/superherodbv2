<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register'=> false, 'reset' => false]);

Route::get('/home', [HeroController::class, 'index'])->name('home');

Route::resource('heros', HeroController::class) -> middleware('auth');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [HeroController::class, 'index'])->name('home');
});