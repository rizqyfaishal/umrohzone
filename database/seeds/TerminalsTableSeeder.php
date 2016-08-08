<?php

use Illuminate\Database\Seeder;

class TerminalsTableSeeder extends Seeder
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
        for($i = 0;$i<$limit;$i++){
            \App\Terminal::create(['nama' => $faker->userName]);
        }
    }
}
