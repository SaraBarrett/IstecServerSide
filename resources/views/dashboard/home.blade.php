@extends('layouts.fe_master')
@section('content')
    <h5>Olá, estás no dashboard</h5>
    <p>Olá {{ Auth::user()->name }}</p>
@endsection
