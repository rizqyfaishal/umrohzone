<?php

use Illuminate\Database\Seeder;

class AttachmentCategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\AttachmentCategory::create([
            'name' => 'Images'
        ]);
        \App\AttachmentCategory::create([
            'name' => 'Dokumen'
        ]);
        \App\AttachmentCategory::create([
            'name' => 'Scan'
        ]);
        \App\AttachmentCategory::create([
            'name' => 'Photos'
        ]);
    }
}
