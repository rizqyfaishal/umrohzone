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
            \App\Hotel::create([
                'nama' => $faker->streetName,
                'deskripsi' => $faker->paragraph,
                'review' => $faker->paragraph
            ]);
        }
    }
}
