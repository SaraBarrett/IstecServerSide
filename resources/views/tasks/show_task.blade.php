@extends('layouts.fe_master')
@section('content')
    <h5>Ver Tarefa {{ $ourTask->name }}</h5>
    <p>Nome: {{ $ourTask->name }}</p>
    <p>Descrição: {{ $ourTask->description }}</p>
    <p>Estado:{{ $ourTask->status }}</p>
    <p>Responsável:{{ $ourTask->username }}</p>
@endsection
