@extends('layouts.fe_master')
@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="mb-3">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input value="{{request()->email}}" required name="email" type="email" class="form-control" id="exampleInputEmail1"
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
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmar Password</label>
                <input required name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                    Password Inválida
                @enderror
            </div>

    <input type="hidden" name="token" value="{{request()->token}}">
            <button type="submit" class="btn btn-primary">Actualizar Pass</button>
    </form>
@endsection
