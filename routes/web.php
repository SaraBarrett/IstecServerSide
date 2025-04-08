<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HomeController::class, 'hello'] )->name('world.welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');


//criar uma rota onde no futuro vão aparecer todos os utilizadores
Route::get('/admin-utilizadores', [UserController::class, 'allUsers'])->name('users.all');
Route::get('/add-utilizadores', [UserController::class, 'addUser'])->name('users.add');
//rota com parametro que, ao clicar, mostra uma blade/view com os dados do user
Route::get('/show-user/{id}', [UserController::class, 'showUser'])->name('user.show');
Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('user.delete');


//rotas para tarefas
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.all');
Route::get('/show_task/{id}', [TaskController::class, 'showTask'])->name('tasks.show');
Route::get('/delete_task/{id}', [TaskController::class, 'deleteTask'])->name('tasks.delete');

Route::get('/hello_mundo', function(){
    return '<h5>Hello mundo !!</h5>';
})->name('world.hello');

Route::get('/world_hello/{name}', function($name){
    return '<h5>Hello '.$name.' !!</h5>';
});







Route::fallback(function(){
    return view('fallback');
});
