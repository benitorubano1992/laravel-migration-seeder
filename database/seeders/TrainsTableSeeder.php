<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();   //
            $newTrain->azineda = $faker->word();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->dateTimeBetween('+0 days', '+5 days');
            $newTrain->orario_arrivo = $faker->dateTimeBetween('+0 days', '+5 days');
            $newTrain->codice = $faker->bothify("??####");
            $newTrain->carrozze = $faker->numberBetween(1, 10);
            $newTrain->in_orario = $faker->numberBetween(0, 1);
            $newTrain->cancellato = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
