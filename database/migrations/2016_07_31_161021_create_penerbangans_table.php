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
            $table->integer('manasik_id')
                ->references('id')
                ->on('manasik')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->date('tanggal_berangkat');
            $table->integer('waktu_tempuh')->unsigned();
            $table->string('bandara');
            $table->string('terminal');
            $table->integer('kode_booking_bnb')->unsigned();
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
