<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Auto;
use Illuminate\Support\Str;

class AutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
                 // Associo le marche ai loro modelli
                  $carModels = [
                   'Toyota' => 'Yaris',
                   'Renault' => 'Clio',
                   'Mercedes Benz' => 'Classe A',
                   'BMW' => 'M4',
                   'Fiat' => 'Panda',
                   'Alfa Romeo' => '155',
                   'Ferrari' => '458',
                   'Lamborghini' => 'Huracan',
                   'Honda' => 'Civic',
                ];

                 // Cicla attraverso i marchi e i modelli
                 foreach ($carModels as $brand => $model) {
                     // Crea una nuova auto
                     $auto = new Auto();

                    $auto->brand = $brand;   // Marca dell'auto
                    $auto->model = $model;   // Modello dell'auto
                    $auto->year = $faker->numberBetween(2000, 2023);  // Anno di produzione
                    $auto->color = $faker->safeColorName();  // Colore casuale
                    $auto->horsepower = $faker->numberBetween(70, 600);  // Potenza in cavalli
                    $auto->fuel_type = $faker->randomElement(['GPL', 'diesel', 'benzina', 'elettrico']);  // Tipo di carburante
                    $auto->doors = $faker->randomElement([3, 5]);  // Numero di porte
                    $auto->mileage = $faker->numberBetween(0, 200000);  // Chilometraggio
                    $auto->change_type = $faker->randomElement(['manuale', 'automatica']);  // Cambio
                    $auto->slug = Str::slug($auto->brand.'-'.$auto->model, '-');
                    $auto->price = $faker->randomFloat(2, 10000, 200000);  // Prezzo casuale
                    $auto->quantity = $faker->numberBetween(1, 100);  // Quantità disponibile
                    $auto->status = $faker->randomElement(['available', 'sold']);  // Stato dell'auto: disponibile o venduta

                     // Salva l'auto nel database
                     $auto->save();
            }

        }
    }
}
