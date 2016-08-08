<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agen', function (Blueprint $table) {
            $table->increments('id');
            $table->char('no_agen',6);
            $table->string('direktur');
            $table->string('phone_direktur');
            $table->string('bank');
            $table->string('no_rekening');
            $table->string('nama_agen');
            $table->integer('rating');
            $table->integer('provinsi_id')->unsigned();
            $table->integer('regency_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agens');
    }
}
