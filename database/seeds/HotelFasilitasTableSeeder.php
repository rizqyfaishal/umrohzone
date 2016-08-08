<?php

use Illuminate\Database\Seeder;

class HotelFasilitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 150;
        for($i = 0;$i<$limit;$i++){
            \App\HotelFasilitas::create([
                'name' => $faker->name,
            ]);
        }
    }
}
