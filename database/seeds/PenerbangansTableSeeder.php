<?php

use Illuminate\Database\Seeder;

class PenerbangansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $terminals = \App\Terminal::all()->all();
        $bandaras = \App\Bandara::all()->all();
        $pesawats = \App\Pesawat::all()->all();
        $limit = 150;
        for($i = 0 ;$i<$limit;$i++){
            \App\Penerbangan::create([
                'tanggal_berangkat' => $faker->dateTime,
                'waktu_tempuh' => $faker->numberBetween(1,10),
                'terminal_berangkat_id' => $terminals[$faker->numberBetween(0,count($terminals)-1)]->id,
                'terminal_tujuan_id' => $terminals[$faker->numberBetween(0,count($terminals)-1)]->id,
                'bandara_tujuan_id' => $bandaras[$faker->numberBetween(0,count($bandaras)-1)]->id,
                'bandara_berangkat_id' => $bandaras[$faker->numberBetween(0,count($bandaras)-1)]->id,
                'pesawat_id' => $pesawats[$faker->numberBetween(0,count($pesawats)-1)]->id,
            ]);
        }
    }
}
