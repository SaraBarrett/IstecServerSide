<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h5, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h5>Todas as Tarefas</h5>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task['name'] }}: {{ $task['user'] }} - {{ $task['prazo'] }}</li>
    </ul>
    @endforeach

</body>

</html>
