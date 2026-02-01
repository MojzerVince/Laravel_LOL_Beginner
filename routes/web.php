<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/GetAllCharacter', [CharacterController::class, "index"]);
Route::resource('/characters', CharacterController::class);

Route::get('/trashed-characters', [CharacterController::class, 'trashed'])->name('characters.trashed');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
