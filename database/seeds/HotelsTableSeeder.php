<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 50;
        for($i = 0; $i < $limit ;$i++){
            $hotel = \App\Hotel::create([
                'nama' => $faker->streetName,
                'deskripsi' => $faker->paragraph,
                'review' => $faker->paragraph
            ]);
            $arr = array();
            $l = $faker->numberBetween(1,count(\App\HotelFasilitas::all()));
            for($j = 0;$j<$l;$j++){
                array_push($arr,$faker->numberBetween(0,count(\App\HotelFasilitas::all())-1));
            }
            $hotel->fasilitas()->sync($arr);
        }
    }
}
