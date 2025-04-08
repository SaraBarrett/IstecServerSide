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

    public function showUser($id){

        $ourUser = DB::table('users')
                    ->where('id', $id)
                    ->first();


        return view('users.show_user', compact('ourUser'));
    }

    public function deleteUser($id){
        DB::table('tasks')
        ->where('user_id', $id)
        ->delete();

        Db::table('users')
        ->where('id', $id)
        ->delete();

        return back();
    }

    public function storeUser(Request $request){
        $request->validate([
            'name' => 'required|max:50',
            'email' =>'required|unique:users|email|max:25',
            'password' => 'required|min:8'
        ]);

        
    }
}
