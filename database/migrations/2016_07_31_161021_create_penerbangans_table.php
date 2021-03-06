<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerbangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerbangan', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('tanggal_berangkat');
            $table->integer('waktu_tempuh')->unsigned();
            $table->dateTime('tanggal_tiba');
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
        Schema::drop('penerbangans');
    }
}
