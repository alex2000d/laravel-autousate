@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2 class="text-center">modifica macchina</h2>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.autos.update', ['auto' => $auto->id]) }}" method="post">
                @csrf 
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Nome dell'auto</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="Nome dell'auto">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Tipo di motore</label>
                        <input type="text" name="engine" id="" class="form-control" placeholder="Tipo di motore">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Prezzo</label>
                        <input type="text" name="price" id="" class="form-control" placeholder="Prezzo">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Quantità</label>
                        <input type="text" name="quantity" id="" class="form-control" placeholder="Quantità">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Optionals</label>
                        <input type="text" name="optionals" id="" class="form-control" placeholder="Optionals">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="" class="control-label">Status</label>
                        <input type="text" name="status" id="" class="form-control" placeholder="Status">
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