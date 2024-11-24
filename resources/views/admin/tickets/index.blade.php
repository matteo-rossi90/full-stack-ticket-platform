@extends('layouts.app')

@section('content')

<div class="container-fluid title">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mx-4 fs-4 text-secondary my-4">
            {{ __('Lista dei tickets') }}
        </h2>

        <form action="{{ route('admin.tickets.index') }}" method="GET">
            @csrf
            <div class="row">

                <div class="col">
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="">Categoria</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                @if(request('category_id') == $category->id) selected @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="col">
                    <select name="status_id" id="status_id" class="form-select">
                        <option value="">Stato</option>
                        @foreach($statuses as $status)
                            <option value="{{ $status->id }}"
                                @if(request('status_id') == $status->id) selected @endif>
                                {{ $status->type }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4 d-flex align-items-end gap-2">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="bi bi-funnel"></i>
                    </button>
                    <a href="{{route('admin.tickets.index')}}" class="btn btn-outline-danger">Annulla</a>
                </div>
            </div>
        </form>
    </div>


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
                        @foreach($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->id}}</td>
                            <td>{{ $ticket->title}}</td>
                            <td>{{ $ticket->date}}</td>
                            <td class="dimension">{{ $ticket->category->name}}</td>
                            <td class="dimension">
                                <div class="{{ $ticket->status->type === 'ASSEGNATO' ? 'assigned' : ($ticket->status->type === 'IN LAVORAZIONE' ? 'in_progress' : 'closed') }}">
                                    {{ $ticket->status->type}}
                                </div>

                            </td>
                            <td>{{ $ticket->operator ? $ticket->operator->name : 'Nessun operatore'}} {{ $ticket->operator ? $ticket->operator->surname : 'Nessun operatore'}}</td>
                            <td class="d-flex gap-3">
                                <a href="{{route('admin.tickets.show', $ticket)}}" class="btn btn-show">
                                    <i class="bi bi-eye text-secondary"></i>
                                </a>
                                <a href="{{route('admin.tickets.edit', $ticket)}}" class="btn btn-edit">
                                    <i class="bi bi-pencil-square text-secondary"></i>
                                </a>

                                <form class="d-inline" action="{{route('admin.tickets.destroy', $ticket)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-trash" type="button" data-bs-toggle="modal" data-bs-target="#modal-{{$ticket->id}}">
                                        <i class="bi bi-trash3 text-danger"></i>
                                    </button>

                                    <div class="modal fade" id="modal-{{$ticket->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel-{{$ticket->id}}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalLabel-{{$ticket->id}}">Stai per eliminare il ticket</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Vuoi proprio eliminare il ticket {{$ticket->title}} ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                                <button type="submit" class="btn btn-danger" onclick="document.getElementById('delete-form-{{$ticket->id}}').submit()">Procedi</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                </form>



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
