@extends('layouts.fe_master')
@section('content')
    <h5>Informação de Contacto:</h5>
    <ul>
        <li>{{ $contactInfo['name'] }}</li>
        <li>{{ $contactInfo['phone'] }}</li>
    </ul>
    <h5>Olá {{ $myName }}, aqui terás uma lista de todos os utilizadores</h5>
    <ul>
        @foreach ($contactsArr as $contact)
            <li>{{ $contact['id'] }}: {{ $contact['name'] }} - {{ $contact['phone'] }} </li>
        @endforeach

    </ul>

    <h6>Dados vindos da BD</h6>
    <ul>
        @foreach ($usersFromDB as $user)
            <li>{{ $user->name }} : {{ $user->email }}</li>
        @endforeach
    </ul>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Morada</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usersFromDB as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            @endforeach
        </tbody>
    </table>



    {{ $myContact->name }}
@endsection
