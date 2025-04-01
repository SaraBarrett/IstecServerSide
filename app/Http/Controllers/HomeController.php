<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //aqui vamos colocar todas as funções que precisarmos
    public function index() {

        $helloworld = 'hello mundo';
  
        return view('home', compact('helloworld'));
    }


    public function hello() {
        return view('welcome');
    }
}
