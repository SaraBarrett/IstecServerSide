@extends('layouts.fe_master')
@section('content')
    <h5>Dados do User: {{ $ourUser->name }}</h5>
    <p>Nome: {{ $ourUser->name }}</p>
    <p>Morada:{{ $ourUser->address }}</p>
    <p>Nif:{{ $ourUser->nif }}</p>
    <p>Email:{{ $ourUser->email }}</p>
    <p>Password:{{ $ourUser->password }}</p>
@endsection
