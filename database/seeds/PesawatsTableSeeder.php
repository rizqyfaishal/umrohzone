<?php

use Illuminate\Database\Seeder;

class PesawatsTableSeeder extends Seeder
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
        for ($i = 0;$i<$limit;$i++){
            \App\Pesawat::create([
                'nama' => $faker->domainName,
                'jenis' => $faker->word,
                'kelas' => $faker->colorName,
                'makanan' => $faker->word,
                'hiburan' => $faker->word,
                'penghargaan' => $faker->safeEmail
            ]);
        }
    }
}
