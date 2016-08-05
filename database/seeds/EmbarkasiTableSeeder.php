<?php

use Illuminate\Database\Seeder;

class EmbarkasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $provinsis = App\Provinsi::all()->all();
        $regencies = \App\Regency::all()->all();
        $bandaras = \App\Bandara::all()->all();
        $limit = 50;
        for($i = 0 ;$i<$limit;$i++){
            \App\Embarkasi::create([
                'nama' => $faker->name,
                'provinsi_id' => $provinsis[$faker->numberBetween(0,count($provinsis)-1)]->id,
                'regency_id' => $regencies[$faker->numberBetween(0,count($regencies)-1)]->id,
                'bandara_id' => $bandaras[$faker->numberBetween(0,count($bandaras)-1)]->id
            ]);
        }
    }
}
