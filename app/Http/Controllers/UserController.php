<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        //query para quando queremos ir buscar um conjunto de linhas
        $usersFromDB =
        User::get();

         //query para quando queremos ir buscar um único objecto
        $myContact = db::table('users')
        ->where('id', 1)
        ->first();

        return view('users.all_users', compact('myName', 'contactInfo', 'contactsArr','usersFromDB', 'myContact'));
    }

    public function addUser(){
        return view('users.add_users');
    }
}
