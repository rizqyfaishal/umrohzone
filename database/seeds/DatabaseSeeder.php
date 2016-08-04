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
//        $this->call(EmbarkasiTableSeeder::class);
//        $this->call(BandaraTableSeeder::class);
        $this->call(AttachmentCategoriesTable::class);
        $this->call(TerminalsTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
    }
}
