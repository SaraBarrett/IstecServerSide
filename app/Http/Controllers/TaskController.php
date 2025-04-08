<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){

        //dados criados por nós na função
        $tasks = [
            ['name' => 'estudar Laravel', 'user' => 'Luís', 'prazo'=>'2025-04-01'],
            ['name' => 'estudar Sql', 'user' => 'Quim', 'prazo'=>'2025-04-01'],
            ['name' => 'estudar Algoritmia', 'user' => 'Zé', 'prazo'=>'2025-04-01'],
            ];

        //dados que vêm da Base de Dados
      $tasksFromDB = DB::table('tasks')
        ->join('users', 'users.id', '=', 'tasks.user_id')
        ->select('tasks.*', 'users.name as username')
        ->get();



        return view('tasks.all_tasks', compact('tasks', 'tasksFromDB'));
    }

    public function showTask($id){
        $ourTask = Db::table('tasks')
        ->where('tasks.id', $id)
        ->join('users', 'users.id', '=', 'tasks.user_id')
        ->select('tasks.*', 'users.name as username')
        ->first();


        return view('tasks.show_task', compact('ourTask'));
    }


    public function deleteTask($id){
        DB::table('tasks')
        ->where('id', $id)
        ->delete();

        return back();
    }

}
