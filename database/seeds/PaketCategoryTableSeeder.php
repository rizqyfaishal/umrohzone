<?php

use Illuminate\Database\Seeder;

class PaketCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PaketCategory::create([
            'name' => 'Ekslusif',
            'base_price' => 123
        ]);
        \App\PaketCategory::create([
            'name' => 'Ekonomis',
            'base_price' => 456
        ]);
        \App\PaketCategory::create([
            'name' => 'Smart Value',
            'base_price' => 789
        ]);
    }
}
