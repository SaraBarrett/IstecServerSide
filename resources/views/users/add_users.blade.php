@extends('layouts.fe_master')
@section('content')
    <h5>Aqui, no futuro vais ter um formulário para adicionar utilizadores</h5>

    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input required name="name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @error('name')
                Nome Inválido
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input required name="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            @error('email')
                Email Inválido
            @enderror

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                    Password Inválida
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Registar</button>
    </form>
@endsection
