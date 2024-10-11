@extends('layouts.app')
@section('content')
<main>
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
   <div class="container-fluid bg-gray mt-5">
       <div class="row text-center">
          <div class="col-12 my-5">
              <h1 class="text-center">Le nostre migliori vendite del 2023/2024</h1>
          </div>
          <div class="col-4">
              <img class="best-sales" class="jumbotron" src="{{ Vite::asset('resources/img/ford-best-sales.avif') }}" alt="">
              <strong><h3>Ford Kuga</h3></strong>
           </div>
           <div class="col-4">
              <img class="best-sales" class="jumbotron" src="{{ Vite::asset('resources/img/ford-expedition-best-sales.png') }}" alt="">
              <strong><h3>Ford Expedition</h3></strong>
          </div>
          <div class="col-4">
              <img class="best-sales" class="jumbotron" src="{{ Vite::asset('resources/img/jeep-grand-cherokee-best-sales.png') }}" alt="">
              <strong><h3>Jeep Grand Cherokee</h3></strong>
          </div>
      </div>
   </div>
   <div class="container mt-5">
    <div class="row text-center">
       <div class="col-12 my-5">
           <h1 class="text-center">Qui ci dobbiamo mettere un titolo!!!!</h1>
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
</main>

@endsection