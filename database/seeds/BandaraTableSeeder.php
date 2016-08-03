<?php

use Illuminate\Database\Seeder;

class BandaraTableSeeder extends Seeder
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
        for($i = 0 ;$i<$limit;$i++){
            \App\Bandara::create([
                'nama' => $faker->name,
                'provinsi_id' => 11,
                'regency_id' => 3401
            ]);
        }
    }
}
