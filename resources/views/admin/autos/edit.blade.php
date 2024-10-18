@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2 class="text-center">Modifica l'auto</h2>
        </div>
        <div class="col-12">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.autos.update', ['auto' => $auto->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                <div class="row">
                    <div class="col-6">
                        <label for="" class="control-label">immagine</label>
                        <input type="file" class="form-control" name="image" placeholder="immagine" value="{{old('image')}}">
                        @error ('image')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Nome dell'auto</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="Nome dell'auto" value="{{ old('name') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Tipo di motore</label>
                        <input type="text" name="engine" id="" class="form-control" placeholder="Tipo di motore" value="{{ old('engine') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Prezzo</label>
                        <input type="text" name="price" id="" class="form-control" placeholder="Prezzo" value="{{ old('price') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Quantità</label>
                        <input type="text" name="quantity" id="" class="form-control" placeholder="Quantità" value="{{ old('quantity') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Status</label>
                        <input type="text" name="status" id="" class="form-control" placeholder="Status" value="{{ old('status') }}">
                    </div>
                    <div class="col-12">
                        <label for="">Optionals disponibili</label>
                        <div class="optionals mb-4 mt-3">
                            @foreach($optionals as $optional)
                            <div class="form-check-inline">
                                <input type="checkbox" name="optionals[]" id="" class="form-check-inline" value="{{ $optional->id }}" {{ is_array(old('optionals')) && in_array($optional->id, old('optionals')) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $optional->optionals }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-5">
                    <button type="submit" class="btn btn-success">Salva</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection