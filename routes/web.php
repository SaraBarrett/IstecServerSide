<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HomeController::class, 'hello'] )->name('world.welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
//criar uma rota onde no futuro vão aparecer todos os utilizadores
Route::get('/admin-utilizadores', [UserController::class, 'allUsers'])->name('users.all');
Route::get('/add-utilizadores', [UserController::class, 'addUser'])->name('users.add');

Route::get('/hello_mundo', function(){
    return '<h5>Hello mundo !!</h5>';
})->name('world.hello');

Route::get('/world_hello/{name}', function($name){
    return '<h5>Hello '.$name.' !!</h5>';
});







Route::fallback(function(){
    return view('fallback');
});
