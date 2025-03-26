<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

@php
    $helloworld = 'hello mundo';
@endphp

<body>
    <p>{{ $helloworld }}</p>
    @if (isset($myFirstVar))
        <p>{{ $myFirstVar }}</p>
    @else
        <p>não tem nada definido</p>
    @endif

    <h4>Olá, estás em casa.</h4>
    <ul>
        <li><a href="{{ route('world.hello') }}">Hello</a></li>
        <li><a href="{{ route('world.welcome') }}">Welcome</a></li>
        <li><a href="{{ route('users.all') }}">Todos os Utilizadores</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizadores</a></li>
    </ul>
</body>

</html>
