@extends('layouts.app')

@section('content')

<div class="container-fluid title">
    <h2 class="fs-4 mx-4 text-secondary my-4">
        {{ __('crea un nuovo ticket') }}
    </h2>
</div>

<div class="container-fluid">
    <div class="col m-4">
        <div class="card p-4">
            <form >
                <div class="mb-3">
                    <label class="form-label">Oggetto ticket</label>
                    <input type="text" class="form-control" id="title" placeholder="Es: Rallentamento sistema">
                </div>

                <div class="mb-3">
                    <label class="form-label">Data</label>
                    <input type="date" class="form-control" id="date">
                </div>

                <div class="mb-3">
                    <label class="form-label">Operatore</label>
                   <select class="form-select" id="operator_id">
                    <option selected>Seleziona categoria</option>
                        @foreach($operators as $operator)
                        <option value="{{$operator->id}}">{{$operator->name}} {{$operator->surname}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="mb-3">
                    <label class="form-label">Categoria</label>
                    <select class="form-select" id="category_id">
                        <option selected>Seleziona categoria</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status ticket</label>
                    <select class="form-select" id="status_id">
                        <option selected>Seleziona status</option>
                        @foreach($statuses as $status)
                        <option value="{{$status->id}}">{{$status->type}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea class="form-control" id="message"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

@endsection
