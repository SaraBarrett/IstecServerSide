<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //aqui vamos colocar todas as funções que precisarmos
    public function index() {

        $helloworld = 'hello mundo';
        $istecInfo= [
            'name' => 'Istec',
            'address' => 'Rua do Istec',
            'email' => 'Istec@gmail.com'
        ];

        return view('home', compact('helloworld', 'istecInfo'));
    }


    public function hello() {
        return view('welcome');
    }
}
