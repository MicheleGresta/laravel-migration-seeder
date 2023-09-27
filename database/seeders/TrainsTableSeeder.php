<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 50; $i++) {
                $train = new Train();
                $train->azienda = $faker->company();
                $train->stazione_di_partenza = $faker->city();
                $train->stazione_di_arrivo = $faker->city();
                $train->orario_di_partenza = $faker->time();
                $train->orario_di_arrivo = $faker->time();
                $train->codice_treno = $faker->unique()->numberBetween(11111111, 99999999);
                $train->numero_carrozze = $faker->numberBetween(1, 9);
                $train->in_orario = $faker->boolean();
                $train->cancellato = $faker->boolean();  
                $train->data_di_partenza = $faker->dateTimeInInterval("-3 days", "+150 days");  
                $train->data_di_arrivo = $faker->dateTimeInInterval(" +3 days");  

                $train->save();
         }
    }
}

