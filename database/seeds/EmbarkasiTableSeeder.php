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

        $limit = 50;
        for($i = 0 ;$i<$limit;$i++){
            $bandara = \App\Bandara::find($faker->numberBetween(1,\App\Bandara::count()))->first();
            $provinsi = \App\Provinsi::find(11)->first();
            $kota = $provinsi->regencies()->first();

            $embarkasi = new \App\Embarkasi();
            $embarkasi->nama = $faker->streetName;
            $embarkasi->save();
        }
    }
}
