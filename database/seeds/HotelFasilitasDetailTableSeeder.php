<?php

use Illuminate\Database\Seeder;

class HotelFasilitasDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 300;
        $hotels = \App\HotelFasilitas::all()->all();
        for($i = 0;$i<$limit;$i++){
            \App\HotelFasilitasDetail::create([
                'name' => $faker->name,
                'hotel_fasilitas_id' => $hotels[$faker->numberBetween(1,count($hotels)-1)]->id
            ]);
        }
    }
}
