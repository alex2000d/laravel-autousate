@extends('layouts.app')
@section('content')
<main>
    <div class="jumbo-auto pt-5">
        <div class="jumbo-content pt-5">
                <h1>Rental Cars</h1>
                <strong><p>Scegli l'auto dei tuoi sogni, senza compromessi!</p></strong>
        </div>
    </div>
   <div class="container">
      <div class="row">
          <div class="col-6 mt-5">
            <h1>Qui puoi trovare tutto quello che cerchi e finalmente guidare la macchina dei tuoi sogni</h1>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium natus mollitia alias facere dolore ipsum sunt temporibus tempore eius. Laborum odit error ipsum quidem dolor ullam excepturi ut reprehenderit sint!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sit libero impedit in dignissimos? Expedita eaque blanditiis unde, ullam ratione molestiae saepe fugiat animi neque sit quibusdam alias quas exercitationem?</p>
          </div>
          <div class="col-6 mt-5">
            <img class="jumbotron" src="{{ Vite::asset('resources/img/jumbotron.jpeg') }}" alt="">
          </div>
      </div>
   </div>
   <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-12 my-5">
                <h1 class="text-center">Le nostre migliori vendite del 2023/2024</h1>
            </div>
        </div>
    </div>
   </div>
   <div class="slider w-100 d-flex justify-content-center align-items-center mt-5">
       <div class="slide-track">
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-best-sales.avif') }}" alt="">
              <!-- <strong><h3>Ford Kuga</h3></strong> -->
           </div>
           <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-expedition-best-sales.png') }}" alt="">
              <!-- <strong><h3>Ford Expedition</h3></strong> -->
          </div>
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/jeep-grand-cherokee-best-sales.png') }}" alt="">
              <!-- <strong><h3>Jeep Grand Cherokee</h3></strong> -->
          </div>
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-best-sales.avif') }}" alt="">
              <!-- <strong><h3>Ford Kuga</h3></strong> -->
           </div>
           <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-expedition-best-sales.png') }}" alt="">
              <!-- <strong><h3>Ford Expedition</h3></strong> -->
          </div>
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/jeep-grand-cherokee-best-sales.png') }}" alt="">
              <!-- <strong><h3>Jeep Grand Cherokee</h3></strong> -->
          </div>
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-best-sales.avif') }}" alt="">
              <!-- <strong><h3>Ford Kuga</h3></strong> -->
           </div>
           <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-expedition-best-sales.png') }}" alt="">
              <!-- <strong><h3>Ford Expedition</h3></strong> -->
          </div>
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/jeep-grand-cherokee-best-sales.png') }}" alt="">
              <!-- <strong><h3>Jeep Grand Cherokee</h3></strong> -->
          </div>

          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-best-sales.avif') }}" alt="">
              <!-- <strong><h3>Ford Kuga</h3></strong> -->
           </div>
           <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-expedition-best-sales.png') }}" alt="">
              <!-- <strong><h3>Ford Expedition</h3></strong> -->
          </div>
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/jeep-grand-cherokee-best-sales.png') }}" alt="">
              <!-- <strong><h3>Jeep Grand Cherokee</h3></strong> -->
          </div>
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-best-sales.avif') }}" alt="">
              <!-- <strong><h3>Ford Kuga</h3></strong> -->
           </div>
           <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-expedition-best-sales.png') }}" alt="">
              <!-- <strong><h3>Ford Expedition</h3></strong> -->
          </div>
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/jeep-grand-cherokee-best-sales.png') }}" alt="">
              <!-- <strong><h3>Jeep Grand Cherokee</h3></strong> -->
          </div>
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-best-sales.avif') }}" alt="">
              <!-- <strong><h3>Ford Kuga</h3></strong> -->
           </div>
           <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/ford-expedition-best-sales.png') }}" alt="">
              <!-- <strong><h3>Ford Expedition</h3></strong> -->
          </div>
          <div class="slide mx-5">
              <img src="{{ Vite::asset('resources/img/jeep-grand-cherokee-best-sales.png') }}" alt="">
              <!-- <strong><h3>Jeep Grand Cherokee</h3></strong> -->
          </div>
      </div>
   </div>
   <div class="container mt-5">
     <div class="row text-center">
       <div class="col-12 my-5">
           <h1 class="text-center">Scegli il giusto stile</h1>
       </div>
       <div class="col-4">
        <strong><h3>avventura e comfort</h3></strong><hr>
        <p>Con le nostre auto partire per una nuova avventura non sara piu un problema,<br> le nostre auto sono dotate di tutto cosi da rendere il viaggio piu piacevole. </p>
           <img class="adventure" src="{{ Vite::asset('resources/img/volante-auto.jpg') }}" alt="">
        </div>
        <div class="col-4">
            <strong><h3>velocita e sicurezza</h3></strong><hr>
        <p>puoi scegliere sia la potenza pura con le nostre auto sportive e sentire il suono della libertà, oppure goderti il viaggio con la famiglia in totale sicurezza con i nostri suv scoprendo sempre posti meravigliosi.</p>
           <img class="velocity" src="{{ Vite::asset('resources/img/ferrari.jpg') }}" alt="">
       </div>
       <div class="col-4">
        <strong><h3>Stile</h3></strong><hr>
        <p>Scegli la macchina che fa per te e cambia il tuo stile di vita. Fai la tua scelta</p>
           <img class="style mt-5" src="{{ Vite::asset('resources/img/porsche.jpg') }}" alt="">
       </div>
    </div>
</div>
<div class="container">
    <div class="row row-cols-5">
        <div class="col"><img class="brand " src="{{ Vite::asset('resources/img/bmw-logo.png') }}"></div>
        <div class="col"> <img class="brand" src="{{ Vite::asset('resources/img/fiat-logo.png') }}"></div>
        <div class="col"> <img class="brand" src="{{ Vite::asset('resources/img/ferrari-logo.png') }}" alt=""></div>
        <div class="col"> <img class="brand" src="{{ Vite::asset('resources/img/mercedes-logo.png') }}" alt=""></div>
        <div class="col"><img class="brand" src="{{ Vite::asset('resources/img/jeep-logo.png') }}"></div>
    </div>
</div>
<div class="container bg-yellow position">
    <div class="row">
        <div class="col-6 mt-5">
            <h1 class="ms-5">Premium Car<br> Rental</h1>
            <button class="btn btn-dark mt-3 ms-5"><img class="apple-store me-3" src="{{ Vite::asset('resources/img/apple-logo.png') }}">Apple Store</button>
            <button class="btn btn-dark mt-3 ms-5"><img class="play-store me-3" src="{{ Vite::asset('resources/img/play-store-logo.webp') }}"> Google Play</button>
        </div>
        <div class="col-6 mt-5">
            <img class="mobile me-3" src="{{ Vite::asset('resources/img/mobile.png') }}">
        </div>
    </div>
 </div>
</main>

@endsection