<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>
    <p>{{ $helloworld }}</p>
    <h5>Dados de Contacto</h5>
    <p>{{ $istecInfo['name'] }}: {{ $istecInfo['address'] }}, {{ $istecInfo['email'] }}</p>


    <h4>Olá, estás em casa.</h4>
    <ul>
        <li><a href="{{ route('world.hello') }}">Hello</a></li>
        <li><a href="{{ route('world.welcome') }}">Welcome</a></li>
        <li><a href="{{ route('users.all') }}">Todos os Utilizadores</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizadores</a></li>
        <li><a href="{{ route('tasks.all') }}">Tarefas</a></li>
    </ul>
</body>

</html>
