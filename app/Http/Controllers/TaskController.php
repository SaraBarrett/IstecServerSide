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
        $tasksFromDB = DB::table('tasks')->get();



        return view('tasks.all_tasks', compact('tasks', 'tasksFromDB'));
    }

}
