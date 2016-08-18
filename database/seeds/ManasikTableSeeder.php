<?php

use Illuminate\Database\Seeder;

class ManasikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker\Factory::create();
        $limit = 50;
        for ($i = 0;$i<$limit;$i++){
            $manasik = \App\Manasik::create([
                'waktu_manasik' => $faker->dateTimeThisYear->format('d/m/Y H:i')
            ]);
            $address = \App\Address::create([
                'full_address' => $faker->address,
                'google_map_url' => $faker->url
            ]);
            $manasik->address()->save($address);
        }
    }
}
