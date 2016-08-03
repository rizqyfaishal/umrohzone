<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 5;
        $users = \App\User::all()->all();
        for($i = 0;$i<$limit;$i++){
            $admin = \App\Admin::create([
                'name' => $faker->name
            ]);
            $admin->user()->save($users[$faker->numberBetween(0,count($users)-1)]);
        }
    }
}
