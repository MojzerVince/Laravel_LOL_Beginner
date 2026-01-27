<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/GetAllCharacter', [CharacterController::class, 'index']);
Route::resource('/characters', CharacterController::class);

Route::resource('/create', CharacterController::class);