@extends('layouts.app')

@section('content')

<div class="title">
    <h2 class="container fs-4 text-secondary my-4">
        {{ __('Operatori') }}
    </h2>
</div>

<div class="container-fluid">
    <table class="table my-3">
        <thead>
            <tr>
            <th scope="col">#id</th>
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
            <th scope="col">Email</th>
            <th scope="col">Disponibile</th>
            </tr>
        </thead>
        <tbody>
            @foreach($operators as $operator)
            <tr>
                <td>{{ $operator->id}}</td>
                <td>{{ $operator->name}}</td>
                <td>{{ $operator->surname}}</td>
                <td>{{ $operator->email}}</td>
                <td>{{ $operator->is_available}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
