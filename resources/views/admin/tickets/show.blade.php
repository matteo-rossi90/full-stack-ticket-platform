@extends('layouts.app')

@section('content')

<div class="container-fluid title">
    <h2 class="mx-4 fs-4 text-secondary my-4">
        {{$ticket->title}}
    </h2>
</div>

<div class="container-fluid">
        <div class="d-flex justify-content-center flex-grow-1">
        <div class="col m-4">
            <div class="card p-4 w-100">
                <ul class="p-0">
                    <li class="mb-4 d-flex justify-content-between align-items-center">
                        <div class="{{$ticket->status->type === 'ASSEGNATO' ? 'assigned' : ($ticket->status->type === 'IN LAVORAZIONE' ? 'in_progress' : 'closed')}} text-badge">
                            {{$ticket->status->type}}
                        </div>
                        <div class="">
                            Inviato il {{$ticket->date}}
                        </div>
                    </li>
                    <li>
                        <div class="mb-3">
                            {{$ticket->message}}
                        </div>
                    </li>
                    <li>
                        Gestito da {{$ticket->operator->name}} {{$ticket->operator->surname}}
                    </li>
                </ul>
            </div>

        </div>

</div>

@endsection
