<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $search =  request()->search;

        $usersFromDB = DB::table('users');
        if($search){
            $usersFromDB =
            $usersFromDB->where('name','LIKE', "%{$search}%")
            ->orwhere('email','LIKE', "%{$search}%");
        }
        $usersFromDB =  $usersFromDB->get();

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

        User::insert([
            'name' => $request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users.all')->with('message', 'User adicionado com sucesso!');

    }

    public function updateUser(Request $request){
       $request->validate([
        'name' => 'required'
       ]);

       DB::table('users')
       ->where('id',  $request->id)
       ->update([
            'name' => $request->name,
            'address' => $request->address,
            'nif' => $request->nif,
       ]);

       return redirect()->route('users.all')->with('message', 'User actualizado com sucesso!');
    }
}
