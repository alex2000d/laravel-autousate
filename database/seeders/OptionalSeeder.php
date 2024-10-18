<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Optional;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = ['GPS', 'heat seats', 'parking assist', 'sunroof', 'Cruise control', 'head-lights', 'leather seats', 'wireless charging', 'remote start', 'power tailgate', 'rear camera'];

        foreach($options as $option){
            $optional = new Optional();

            $optional->optionals = $option;
            $optional->slug = Optional::generateSlug($option);

            $optional->save();
        }
    }
}
