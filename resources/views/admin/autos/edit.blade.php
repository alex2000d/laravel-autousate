@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2 class="text-center">Modifica auto</h2>
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
            <form action="{{route('admin.autos.update', ['auto' => $auto->id])}}" method="post" enctype="multipart/form-data">
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
                        <label for="" class="control-label">Brand</label>
                        <input type="text" name="brand" id="" class="form-control" placeholder="Brand" value="{{ old('brand', $auto->brand) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Modello</label>
                        <input type="text" name="model" id="" class="form-control" placeholder="Modello" value="{{ old('model', $auto->model) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Year</label>
                        <input type="text" name="year" id="" class="form-control" placeholder="Year" value="{{ old('year', $auto->year) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Carburante</label>
                        <input type="text" name="fuel_type" id="" class="form-control" placeholder="fuel_type" value="{{ old('fuel_type', $auto->fuel_type) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Cavalli</label>
                        <input type="text" name="horsepower" id="" class="form-control" placeholder="horsepower" value="{{ old('horsepower', $auto->horsepower) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Numero porte</label>
                        <input type="text" name="doors" id="" class="form-control" placeholder="doors" value="{{ old('doors', $auto->doors) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Cambio</label>
                        <input type="text" name="change_type" id="" class="form-control" placeholder="change_type" value="{{ old('change_type', $auto->change_type) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Colore</label>
                        <input type="text" name="color" id="" class="form-control" placeholder="color" value="{{ old('color', $auto->color) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Chilometraggio</label>
                        <input type="text" name="mileage" id="" class="form-control" placeholder="mileage" value="{{ old('mileage', $auto->mileage) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Prezzo</label>
                        <input type="text" name="price" id="" class="form-control" placeholder="price" value="{{ old('price', $auto->price) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Quantità disponibili</label>
                        <input type="text" name="quantity" id="" class="form-control" placeholder="quantity" value="{{ old('quantity', $auto->quantity) }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Stato disponibilità</label>
                        <input type="text" name="status" id="" class="form-control" placeholder="status" value="{{ old('status', $auto->status) }}"> 
                    </div>
                    <div class="col-12">
                        <label for="">Optionals disponibili</label>
                        <div class="optionals mb-4 mt-3">
                            @foreach ($optionals as $optional)
                            <div class="form-check-inline">
                                   @if ($errors->any())
                                   <input type="checkbox" name="optionals[]" class="form-check-input" value="{{$optional->id}}" {{ in_array($optional->id, old('optionals')) ? 'checked' : '' }}>
                                   @else    
                                   <input type="checkbox" name="optionals[]" class="form-check-input" value="{{$optional->id}}" {{ $auto->optionals->contains($optional->id) ? 'checked' : '' }}>
                                   @endif
                                  <label for="" class="form-check-label">{{$optional->optionals}}</label>
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