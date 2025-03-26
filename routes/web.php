<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('welcome');
})->name('world.welcome');

Route::get('/hello_mundo', function(){
    return '<h5>Hello mundo !!</h5>';
})->name('world.hello');

Route::get('/world_hello/{name}', function($name){
    return '<h5>Hello '.$name.' !!</h5>';
});


Route::get('/home', function () {
    return view('home');
});


//criar uma rota onde no futuro vão aparecer todos os utilizadores
Route::get('/admin-utilizadores', function(){
    return view('users.all_users');
})->name('users.all');
