<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = [
            ['name' => 'estudar Laravel', 'user' => 'Luís', 'prazo'=>'2025-04-01'],
            ['name' => 'estudar Sql', 'user' => 'Quim', 'prazo'=>'2025-04-01'],
            ['name' => 'estudar Algoritmia', 'user' => 'Zé', 'prazo'=>'2025-04-01'],
            ];

        return view('tasks.all_tasks', compact('tasks'));
    }

}
