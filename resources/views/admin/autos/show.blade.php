@extends('layouts.dashboard')

@section('content-main')
<div class="container mt-5">
    <div class="row">
        <div class="col-6 mb-5 p-0 border border-grey border-end-0">
                <a href="{{ route('admin.autos.show', ['auto' => $auto->id]) }}">
                    <div class="image-auto">
                        <img src="{{ $auto->image }}" class="@if(!$auto->image) d-none @endif" alt="{{ $auto->name }}">
                    </div>
                </a>
                </div>
                <div class="col-6 mb-5 py-3 d-flex flex-column justify-content-between border border-grey border-start-0">        
                        <div class="info">
                            <h2 class="mb-5 text-center">{{ $auto->brand }} {{ $auto->model }}</h2>
                            <p><strong>Motore:</strong> {{ $auto->engine }}</p>
                            <p><strong>Optionals disponibili:</strong> {{ $auto->optionals }}</p>
                            <p><strong>disponibilità:</strong> {{ $auto->status }}</p>
                        </div>
                        <div class="mt-auto">
                            <hr>
                            <p class=""><strong>Prezzo:</strong> {{ $auto->price }}&euro;</p>
                        </div>
        </div>
        @if($auto->status === 'sold')
            <h2 class="text-danger">Out of Stock</h2>
        @else
        
        @endif
    </div>
</div>
@endsection

