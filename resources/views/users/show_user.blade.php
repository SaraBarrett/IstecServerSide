@extends('layouts.fe_master')
@section('content')
    <h5>Dados do User: {{ $ourUser->name }}</h5>
    <form method="POST" action="{{route('user.update')}}">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $ourUser->id }}" id="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input required name="name" value="{{ $ourUser->name }}" type="text" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
                Nome Inválido
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input disabled name="email" value="{{ $ourUser->email }}" type="email" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <label for="exampleInputEmail1" class="form-label">Morada</label>
            <input  name="address" value="{{ $ourUser->address }}" type="text" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Nif</label>
            <input  name="nif" value="{{ $ourUser->nif }}" type="text" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
