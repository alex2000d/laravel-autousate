<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Auto;

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

             $auto = new Auto();
             $auto->optionals = implode(', ', $faker->randomElements(['GPS','Sedili_riscaldati', 'Sensori_di_parcheggio','Tetto_apribile','Cruise_control'], 3));
             $auto->name = $faker->randomElement(['Toyota Yaris V4', 'Renault Clio V4', 'Mercedes Benz V6', 'BMW M4 V6', 'Fiat Panda V4', 'Alfa Romeo 155 V4', 'Ferrari California V8', 'Lamborhini Huracan V8', 'Honda Civic V4']);
             $auto->engine = $faker->randomElement(['GPL', 'disel', 'benzina', 'Electric']);
             $auto->price = $faker->randomFloat(2, 10000, 200000);
             $auto->image = $faker->imageUrl(640, 480, 'cars', true, 'auto');
             $auto->quantity = $faker->numberBetween(1, 100);
             $auto->status = $faker->randomElement(['available', 'sold']);

             $auto->save();
            
        }
    }
}
