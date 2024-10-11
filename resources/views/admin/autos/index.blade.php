@extends('layouts.dashboard')

@section('content-main')
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col-12 d-flex flex-column justify-content-between">
            <h1 class="text-center flex-grow-1">Auto Disponibili</h1>
            <div class="mt-auto text-end">
                <a href="{{ route('admin.autos.create') }}" class="btn btn-success mb-3">Aggiungi</a>
            </div>
        </div>
    </div>
    <div class="row">
            @foreach($autos as $auto)
                <div class="col-6 mb-5 p-0 border border-grey border-end-0">
                <a href="{{ route('admin.autos.show', ['auto' => $auto->id]) }}">
                    <div class="image-auto">
                        <img src="{{ $auto->image }}" class="@if(!$auto->image) d-none @endif" alt="{{ $auto->name }}">
                    </div>
                </a>
                </div>
                <div class="col-6 mb-5 py-3 d-flex flex-column border border-grey border-start-0">
                        <div class="info flex-grow-1">
                            <h2 class="mb-5">{{ $auto->name }}</h2>
                            <p><strong>Motore:</strong> {{ $auto->engine }}</p>
                            <p><strong>Optionals disponibili:</strong> {{ $auto->optionals }}</p>
                            <p><strong>quantità:</strong> {{ $auto->quantity }}</p>
                            <p><strong>disponibilità:</strong> {{ $auto->status }}</p>
                        </div>
                        <div class="mt-auto">
                            <hr>
                            <p><strong>Prezzo:</strong> {{ $auto->price }}&euro;</p>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.autos.show', ['auto' => $auto->id]) }}" class="text-decoration-none text-black">
                                    <div class="mt-3 btn btn-success">Visualizza dettagli</div>
                                </a>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
</div>
@endsection