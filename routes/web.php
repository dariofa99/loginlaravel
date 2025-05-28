<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('welcome');
});
Route::post("/store", [UsersController::class, "store"]);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/users/active/account/{token}', [LoginController::class, 'validateAccount']);



Route::middleware(['auth', 'account'])->group(function () {

    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get("/usuarios", [UsersController::class, "index"]);
    Route::get("/eliminar/usuario/{id}", [UsersController::class, "destroy"]);

    Route::resource('posts', BlogController::class);

});
