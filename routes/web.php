<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [HomeController::class, 'hello'] )->name('world.welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/hello_mundo', function(){
    return '<h5>Hello mundo !!</h5>';
})->name('world.hello');

Route::get('/world_hello/{name}', function($name){
    return '<h5>Hello '.$name.' !!</h5>';
});





//criar uma rota onde no futuro vão aparecer todos os utilizadores
Route::get('/admin-utilizadores', function(){
    return view('users.all_users');
})->name('users.all');

Route::get('/add-utilizadores', function(){
    return view('users.add_users');
})->name('users.add');

Route::fallback(function(){
    return view('fallback');
});
