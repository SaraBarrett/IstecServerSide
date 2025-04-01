<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers(){
        $myName = 'Sara';
        $contactInfo = [
            'name' => 'Luís Madeira',
            'phone' => 914377777
        ];

        return view('users.all_users', compact('myName', 'contactInfo'));
    }

    public function addUser(){
        return view('users.add_users');
    }
}
