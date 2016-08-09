<?php

use Illuminate\Database\Seeder;

class HotelFasilitasCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 15;
        for($i = 0;$i<$limit;$i++){
            \App\HotelFasilitasCategory::create([
                'name' => $faker->unique()->colorName
            ]);
        }
    }
}
