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
        $provinsi = \App\Provinsi::all()->all();
        $regencies = \App\Regency::all()->all();
        for($i = 0 ;$i<$limit;$i++){
            \App\Bandara::create([
                'nama' => $faker->name,
                'kode_bandara' => strtoupper($faker->word),
                'provinsi_id' => $provinsi[$faker->numberBetween(0,count($provinsi)-1)]->id,
                'regency_id' => $regencies[$faker->numberBetween(0,count($regencies)-1)]->id
            ]);
        }
    }
}
