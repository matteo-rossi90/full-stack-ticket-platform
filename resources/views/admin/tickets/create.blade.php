@extends('layouts.app')

@section('content')

<div class="container-fluid title">
    <h2 class="fs-4 mx-4 text-secondary my-4">
        {{ __('Crea un nuovo ticket') }}
    </h2>
</div>

<div class="container-fluid">
    <div class="col m-4">
        <div class="card p-4">

            <form action="{{route('admin.tickets.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Oggetto ticket</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Es: Rallentamento sistema">
                    @error('title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Data</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{old('date')}}">
                    @error('date')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="operator_id" class="form-label">Operatore</label>
                   <select class="form-select" id="operator_id" name="operator_id">
                    <option value="">Seleziona operatore</option>
                        @foreach($operators as $operator)
                        <option value="{{$operator->id}}"
                        @if(old('operator_id') == $operator->id) selected @endif>{{$operator->name}} {{$operator->surname}}</option>
                        @endforeach
                    </select>
                    @error('operator_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Categoria</label>
                    <select class="form-select" id="category_id" name="category_id">
                        <option value="">Seleziona categoria</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}"
                        @if(old('category_id') == $category->id) selected @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status_id" class="form-label">Status ticket</label>
                    <select class="form-select" id="status_id" name="status_id">
                        <option value="">Seleziona status</option>
                        @foreach($statuses as $status)
                        <option value="{{$status->id}}"
                        @if(old('status_id') == $status->id) selected @endif>{{$status->type}}</option>
                        @endforeach
                    </select>
                    @error('status_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Descrizione del problema</label>
                    <textarea class="form-control" id="message" name="message" value="{{old('message')}}"></textarea>
                    @error('message')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
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
