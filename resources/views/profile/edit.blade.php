@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="my-4 mx-4">
        <h2 class="fs-4 text-secondary my-5">
            {{ __('Profilo di')  }} {{ Auth::user()->name }}
        </h2>
        <div class="card p-4 mb-4 bg-white rounded-lg">

            @include('profile.partials.update-profile-information-form')

        </div>

        <div class="card p-4 mb-4 bg-white rounded-lg">


            @include('profile.partials.update-password-form')

        </div>

        <div class="card p-4 mb-4 bg-white rounded-lg">


            @include('profile.partials.delete-user-form')

        </div>

    </div>
</div>

@endsection
