<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);



Route::middleware(['auth'])->group(function () {
Route::get('/logout', [LoginController::class, 'logout']);
Route::get("/usuarios",[UsersController::class,"index"]);
Route::post("/store",[UsersController::class,"store"]);
Route::get("/eliminar/usuario/{id}",[UsersController::class,"destroy"]);



});
