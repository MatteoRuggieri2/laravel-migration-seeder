<?php

use Illuminate\Database\Seeder;
use App\Travels;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {

            $new_travel = new Travel();
            $new_travel->destination = $faker->city();
            $new_travel->departure = $faker->date('Y_m_d');
            $new_travel->hotel = rand(0, 1);
            $new_travel->vehicle = $faker->randomElements(['Pullman', 'Treno', 'Nave', 'Traghetto', 'Aereo']);
            $new_travel->price = rand(500, 10000);
            $new_travel->save();

        }
    }
}
