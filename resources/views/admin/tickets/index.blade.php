@extends('layouts.app')

@section('content')

<div class="container-fluid title">
    <h2 class="mx-4 fs-4 text-secondary my-4">
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
                            <td>{{ $item->date}}</td>
                            <td class="dimension">{{ $item->category->name}}</td>
                            <td class="dimension">{{ $item->status->type}}</td>
                            <td>{{ $item->operator->name}} {{ $item->operator->surname}}</td>
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

    @if(session('success'))

        <div class="toast-container position-fixed bottom-0 end-0 me-3 p-3">
            <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif

</div>

@endsection
