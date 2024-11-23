@extends('layouts.app')

@section('content')

<div class="title">
    <h2 class="container fs-4 text-secondary my-4">
        {{ __('Categorie') }}
    </h2>
</div>

<div class="container-fluid">
    <div class="d-flex justify-content-center">
        <div class="col m-4">
            <div class="card p-4">
                <table class="table my-3">
                    <thead>
                        <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id}}</td>
                            <td>{{ $category->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection
