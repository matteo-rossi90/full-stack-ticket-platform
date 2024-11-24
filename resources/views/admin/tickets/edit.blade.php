@extends('layouts.app')

@section('content')

<div class="container-fluid title">
    <h2 class="fs-4 mx-4 text-secondary my-4">
        Modifica di {{ $ticket->title}}
    </h2>
</div>

<div class="container-fluid">
    <div class="col m-4">
        <div class="card p-4">

            <form action="{{route('admin.tickets.update', $ticket)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="status_id" class="form-label">Status ticket</label>
                    <select class="form-select" id="status_id" name="status_id">
                        <option value="">Seleziona status</option>
                        @foreach($statuses as $status)
                        <option value="{{$status->id}}"
                        @if(old('status_id', $ticket->status->id) == $status->id) selected @endif>{{$status->type}}</option>
                        @endforeach
                    </select>
                    @error('status_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Salva</button>
                <a href="{{route('admin.tickets.index')}}" class="btn btn-secondary">Indietro</a>
            </form>

        </div>
    </div>
</div>

@if($errors->any())

    <div class="toast-container position-fixed bottom-0 end-0 me-3 p-3">
        <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Attenzione! Errori individuati: {{$errors->count()}}.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif


@endsection
