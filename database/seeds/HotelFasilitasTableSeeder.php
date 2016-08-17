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
        $category = \App\HotelFasilitasCategory::all()->all();

        for($i = 0;$i<$limit;$i++){
            \App\HotelFasilitas::create([
                'name' => $faker->name,
                'hotel_fasilitas_category_id' => $category[$faker->numberBetween(0,count($category)-1)]->id
            ]);
        }
    }
}
