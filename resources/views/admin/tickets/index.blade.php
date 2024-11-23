@extends('layouts.app')

@section('content')

<div class="title">
    <h2 class="container fs-4 text-secondary my-4">
        {{ __('Lista dei tickets') }}
    </h2>
</div>

<div class="container-fluid">
    <div class="d-flex justify-content-center flex-grow-1">
        <div class="col m-4">
            <div class="card p-4 w-100">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Utente</th>
                        <th scope="col">Data</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Status</th>
                        <th scope="col">Operatore</th>
                        <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->title}}</td>
                            <td>{{ $item->author}}</td>
                            <td>{{ $item->date}}</td>
                            <td class="dimension">{{ $item->category->name}}</td>
                            <td class="dimension">{{ $item->status->type}}</td>
                            <td>{{ $item->operator->name}}</td>
                            <td class="d-flex gap-3">
                                <a href="" class="btn">
                                    <i class="bi bi-eye text-secondary"></i>
                                </a>
                                <a href="" class="btn">
                                    <i class="bi bi-pencil-square text-secondary"></i>
                                </a>
                                <button class="btn">
                                    <i class="bi bi-trash3 text-danger"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

@endsection
