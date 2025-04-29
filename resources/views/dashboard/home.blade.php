@extends('layouts.fe_master')
@section('content')
    <h5>Olá, estás no dashboard</h5>
    <p>Olá {{ Auth::user()->name }}</p>

    @if (Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
        <p>tens super poderes</p>
    @endif
@endsection
