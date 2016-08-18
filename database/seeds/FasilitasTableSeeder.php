<?php

use Illuminate\Database\Seeder;

class FasilitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 20;
        for($i = 0;$i<$limit;$i++){
            \App\Fasilitas::create([
                'name' => $faker->word,
                'description' =>$faker->word
            ]);
        }
    }
}
