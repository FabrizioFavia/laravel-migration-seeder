<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        for ($i=0; $i < 20; $i++) { 
            $newTrain = new Train();
            $newTrain ->company = $faker->word(1);
            $newTrain ->departure_station = $faker->word(1);
            $newTrain ->arrival_station = $faker->word(1);
            $newTrain ->departure_date = $faker->date();
            $newTrain ->departure_time = $faker->time();
            $newTrain ->arrival_time = $faker->time();
            $newTrain ->train_code = $faker->numberBetween(10000, 99999);
            $newTrain ->coaches_number = $faker->numberBetween(5, 15);
            $newTrain ->on_time = $faker->numberBetween(0, 1);
            $newTrain ->cancelled = $faker->numberBetween(0, 1);
            $newTrain ->save();

        }
    }
}
