@extends('layouts.fe_master')

@section('content')
    <img src="{{asset('images/what-is-software-CA-Capterra-Header.png
    ')}}" alt="">
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
@endsection
