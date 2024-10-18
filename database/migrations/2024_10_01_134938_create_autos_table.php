<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('brand');  // Marca dell'auto (es. BMW, Audi)
            $table->string('model');  // Modello dell'auto
            $table->year('year');  // Anno di produzione dell'auto
            $table->string('fuel_type');  // Tipo di carburante (GPL, diesel, benzina, elettrico)
            $table->integer('horsepower');  // Potenza in cavalli
            $table->integer('doors');  // Numero di porte
            $table->string('change_type');  // Cambio (manuale o automatico)
            $table->string('color');  // Colore dell'auto
            $table->integer('mileage')->nullable();  // Chilometraggio (opzionale per auto nuove)
            $table->decimal('price', 8, 2);  // Prezzo dell'auto
            $table->string('image')->default('https://placehold.co/600x400?text=immagine+copertina');  // Immagine predefinita
            $table->integer('quantity');  // Quantità disponibile (numeric, non string)
            $table->string('status')->default('available');  // Stato (disponibile o venduta 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
};
