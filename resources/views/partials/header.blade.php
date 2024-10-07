<!-- resources/views/partials/header.blade.php -->
<header>
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-12 col-lg-2">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/Rental_Cars-removebg-preview.png') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-8 mt-4">
                <ul class="list-unstyled d-flex gap-3 justify-content-center">
                    <a href="{{route('homepage')}}" class="text-decoration-none text-dark"><li>home</li></a>
                    <a href="{{route('autos.index')}}" class="text-decoration-none text-dark"><li>auto</li></a>
                    <a class="text-decoration-none text-dark"><li>contatti</li></a>
                </ul>
            </div>
            <div class="col-12 col-lg-2 mt-4">
                <button class="btn btn-warning">Registrati</button>
            </div>
        </div>
    </div>
</header>
