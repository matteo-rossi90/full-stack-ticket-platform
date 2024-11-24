@extends('layouts.app')

@section('content')

    <div class="title">
        <h2 class="container fs-4 text-secondary my-4">
            Dashboard di {{ Auth::user()->name }}
        </h2>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center mx-3">
            <div class="col">
                <div class="card p-3">

                    <div class="d-flex flex-row gap-5 p-4">
                        <div class="d-flex flex-column align-items-center mx-3">
                            <div class="icon-dash d-flex justify-content-center align-items-center mb-3">
                                <i class="icon-ticket bi bi-ticket-perforated"></i>
                            </div>
                            <h5 class="mb-3">{{$count_tickets}}</h5>
                            <h5 class="mb-3">Tickets</h5>

                        </div>
                        <div class="d-flex flex-column align-items-center mx-3">
                            <div class="icon-dash d-flex justify-content-center align-items-center mb-3">
                                <i class="icon-ticket bi bi-people"></i>
                            </div>
                            <h5 class="mb-3">{{$count_operators}}</h5>
                            <h5 class="mb-3">Operatori</h5>
                        </div>
                        <div class="d-flex flex-column align-items-center mx-3">
                            <div class="icon-dash d-flex justify-content-center align-items-center mb-3 ">
                                <i class="icon-ticket bi bi-bookmarks"></i>
                            </div>
                            <h5 class="mb-3">{{$count_categories}}</h5>
                            <h5 class="mb-3">Categorie</h5>
                        </div>

                    </div>



                    {{-- <div class="card-body"> --}}
                        {{-- @if (session('status')) --}}
                        {{-- <div class="alert alert-success" role="alert"> --}}
                            {{-- {{ session('status') }} --}}
                        {{-- </div> --}}
                        {{-- @endif --}}

                    {{-- </div> --}}
                </div>
            </div>

            <div class="col">
                <div class="card p-3">
                    <div class="p-4 d-flex flex-row gap-4">
                        <div class="logo-auth-big me-3">
                            <a href="{{url('profile')}}">
                                <img src= "{{Vite::asset('public/user.jpg')}}" alt="user">
                            </a>
                        </div>

                        <div class="d-flex flex-column">
                            <h4>
                                Profilo personale
                            </h4>
                            <ul class="p-0">
                                <li class="py-3 d-flex align-items-center gap-3">
                                    <i class="bi bi-person-vcard"></i>
                                    {{Auth::user()->name}}
                                </li>
                                <li class="py-3 d-flex align-items-center gap-3">
                                    <i class="bi bi-envelope-at"></i>
                                    {{Auth::user()->email}}
                                </li>

                            </ul>
                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection
