@extends('layouts.fe_master')
@section('content')
    @if (session('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
    @endif

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

    <form action="">
        <input type="text" name="search" id="" value="{{ request()->search }}">
        <button class="btn btn-info">Procurar</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Morada</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usersFromDB as $user)
                <tr>
                    <td><img src="{{
                        $user->photo?
                        asset('storage/'.$user->photo
                        )
                        :
                        asset('images/nophoto.jpg')
                        }}" alt=""></td>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    <td><a href="{{ route('user.show', $user->id) }}" class="btn btn-info">Ver</a></td>
                    @auth
                        @if (Auth::user()->email == 'SaraLaravel@gmail.com')
                            <td><a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger">Apagar</a></td>
                        @endif
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>



    {{ $myContact->name }}
@endsection
