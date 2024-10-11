@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-6 mb-5 p-0 border border-grey border-end-0">
                <a href="{{ route('admin.autos.show', ['auto' => $auto->id]) }}">
                    <div class="image-auto">
                        <img src="{{ $auto->image }}" class="@if(!$auto->image) d-none @endif" alt="{{ $auto->name }}">
                    </div>
                </a>
                </div>
                <div class="col-6 mb-5 py-3 d-flex flex-column border border-grey border-start-0">
                    <a href="{{ route('admin.autos.show', ['auto' => $auto->id]) }}" class="text-decoration-none text-black">
                        <div class="info">
                            <h2 class="mb-5">{{ $auto->name }}</h2>
                            <p><strong>Motore:</strong> {{ $auto->engine }}</p>
                            <p><strong>Optionals disponibili:</strong> {{ $auto->optionals }}</p>
                            <p><strong>disponibilità:</strong> {{ $auto->status }}</p>
                        </div>
                        <div class="mt-auto">
                            <hr>
                            <p><strong>Prezzo:</strong> {{ $auto->price }}&euro;</p>
                        </div>
                    </a>
        </div>
        @if($auto->status === 'sold')
            <h2 class="text-danger">Out of Stock</h2>
        @else
        <h2 class="text-center mb-5">Compila il form sottostante per avere piu informazioni</h2>
        <div class="col-12">
            <form action="">
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Nome</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="Inserisci il tuo nome">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Cognome</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="Inserisci il tuo cognome">
                    </div>
                    <div class="col-6">
                        <label for="" class="control-label">Email</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="inserisci la tua email">
                    </div>
                    <div class="col-6">
                        <label for="" class="control-label">Descrizione</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="Inserisci il tuo numero di telefono">
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </div>
            </form>
        </div>
        @endif
    </div>
</div>
@endsection