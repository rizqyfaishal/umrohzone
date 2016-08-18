<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(UsersTableSeeder::class);
//        $this->call(AdminsTableSeeder::class);
//        $this->call(BandaraTableSeeder::class);
//        $this->call(EmbarkasiTableSeeder::class);
//        $this->call(ManasikTableSeeder::class);
////        $this->call(PesawatsTableSeeder::class);
        $this->call(TerminalsTableSeeder::class);
////        $this->call(PenerbangansTableSeeder::class);
//        $this->call(AttachmentCategoriesTable::class);
//        $this->call(HotelFasilitasCategoryTableSeeder::class);
//        $this->call(HotelFasilitasTableSeeder::class);
////        $this->call(HotelsTableSeeder::class);
////        $this->call(PenerbangansTableSeeder::class);
//        $this->call(PaketCategoryTableSeeder::class);
    }
}
