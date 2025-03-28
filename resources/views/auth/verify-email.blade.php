@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica il tuo indirizzo email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Un link di verifica è stato appena inviato alla tua email.') }}
                    </div>
                    @endif

                    {{ __('Prima di procedere, cerca nella email il tuo link di verifica.') }}
                    {{ __('Se non hai ricevuto l\'email di verifica') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clicca qui per il rinvio') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
