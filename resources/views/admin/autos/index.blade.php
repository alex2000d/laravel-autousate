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
    <div class="row row-cols-5">
            @foreach($autos as $auto)
            <div class="mb-5 col">
                <!-- <a href="{{ route('admin.autos.show', ['auto' => $auto->id]) }}">
                    <div class="image-auto">
                        <img src="../storage/{{ $auto->image }}" alt="{{ $auto->name }}">
                    </div>
                </a>
                <div class="text-center">
                    <h4>{{ $auto->brand }}</h4>
                    <h4>{{ $auto->model }}</h4>
                </div> -->
                <a href="{{ route('admin.autos.show', ['auto' => $auto->id]) }}" class="text-decoration-none text-black">
                    <div class="card" style="width: 18rem;">
                        <img src="" class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="image-card pb-3">
                                <img src="{{ $auto->image }}" alt="{{ $auto->name }}">
                            </div>
                            <h5 class="card-title">{{ $auto->brand }} {{ $auto->model }}</h5>
                            <p class="card-text"><strong>Anno: </strong>{{ $auto->year }}</p>
                            <p class="card-text"><strong>Prezzo: </strong>{{ $auto->price }}&euro;</p>
                            <a href="{{ route('admin.autos.edit', ['auto' => $auto->id]) }}" class="btn btn-success mb-3">Modifica</a>
                            <form action="{{ route('admin.autos.destroy', ['auto' => $auto->id]) }}" method="post" class="ms-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-auto">
                                        Elimina
                                    </button>
                                </form>
                        </div>
                    </div>
                </a>
                    <!-- <div class="mt-auto">
                        <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.autos.edit', ['auto' => $auto->id]) }}" class="text-decoration-none text-black me-2">
                                    <div class="mt-3 btn btn-success">Modifica</div>
                                </a>
                                <a href="{{ route('admin.autos.show', ['auto' => $auto->id]) }}" class="text-decoration-none text-black me-2">
                                    <div class="mt-3 btn btn-success">Visualizza dettagli</div>
                                </a>
                                <form action="{{ route('admin.autos.destroy', ['auto' => $auto->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="mt-3 btn btn-danger delete-auto">
                                        <span>Elimina</span>
                                    </button>
                                </form>
                            </div>
                        </div> -->
            </div>
            @endforeach
        </div>
</div>
@include('admin.autos.partials.modal_delete')
@endsection