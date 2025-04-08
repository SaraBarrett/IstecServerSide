@extends('layouts.fe_master')
@section('content')
    <h5>Todas as Tarefas</h5>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task['name'] }}: {{ $task['user'] }} - {{ $task['prazo'] }}</li>
        @endforeach
    </ul>

    <h6>Tasks vindas da Base de Dados</h6>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome da Tarefa</th>
                <th scope="col">Descrição</th>
                <th scope="col">User</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasksFromDB as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->username }}</td>
                    <td><a class="btn btn-info" href="{{ route('tasks.show', $task->id) }}">Ver Tarefa</a></td>
                    <td><a href="{{ route('tasks.delete', $task->id) }}" class="btn btn-danger">Apagar Tarefa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
