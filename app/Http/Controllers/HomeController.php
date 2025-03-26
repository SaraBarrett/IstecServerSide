<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //aqui vamos colocar todas as funções que precisarmos
    public function index() {
        return view('home');
    }

    public function hello() {
        return view('welcome');
    }
}
