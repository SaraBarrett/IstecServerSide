@extends('layouts.fe_master')
@section('content')
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="mb-3">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input required name="email" type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        @error('email')
            Email Inválido
        @enderror


        <button type="submit" class="btn btn-primary">Recuperar Pass</button>
</form>
@endsection
