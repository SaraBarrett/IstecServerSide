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

        $contactsArr = [
            ['id' => 1, 'name' => 'Hugo', 'phone' => 914444444],
            ['id' => 2, 'name' => 'Osório', 'phone' => 914444444],
            ['id' => 3, 'name' => 'Chico', 'phone' => 914444444],
        ];

        return view('users.all_users', compact('myName', 'contactInfo', 'contactsArr'));
    }

    public function addUser(){
        return view('users.add_users');
    }
}
