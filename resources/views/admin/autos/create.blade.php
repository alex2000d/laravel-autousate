@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2 class="text-center">Aggiungi nuova auto</h2>
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
            <form action="{{ route('admin.autos.store') }}" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="row">
                    <div class="col-6">
                        <label for="" class="control-label">immagine</label>
                        <input type="file" class="form-control" name="image" placeholder="immagine" value="{{old('image')}}">
                        @error ('image')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Brand</label>
                        <input type="text" name="brand" id="" class="form-control" placeholder="Brand" value="{{ old('brand') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Modello</label>
                        <input type="text" name="model" id="" class="form-control" placeholder="Modello" value="{{ old('model') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Year</label>
                        <input type="text" name="year" id="" class="form-control" placeholder="Year" value="{{ old('year') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Carburante</label>
                        <input type="text" name="fuel_type" id="" class="form-control" placeholder="fuel_type" value="{{ old('fuel_type') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Cavalli</label>
                        <input type="text" name="horsepower" id="" class="form-control" placeholder="horsepower" value="{{ old('horsepower') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Numero porte</label>
                        <input type="text" name="doors" id="" class="form-control" placeholder="doors" value="{{ old('doors') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Cambio</label>
                        <input type="text" name="change_type" id="" class="form-control" placeholder="change_type" value="{{ old('change_type') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Colore</label>
                        <input type="text" name="color" id="" class="form-control" placeholder="color" value="{{ old('color') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Chilometraggio</label>
                        <input type="text" name="mileage" id="" class="form-control" placeholder="mileage" value="{{ old('mileage') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Prezzo</label>
                        <input type="text" name="price" id="" class="form-control" placeholder="price" value="{{ old('price') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Quantità disponibili</label>
                        <input type="text" name="quantity" id="" class="form-control" placeholder="quantity" value="{{ old('quantity') }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Stato disponibilità</label>
                        <input type="text" name="status" id="" class="form-control" placeholder="status" value="{{ old('status') }}"> 
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