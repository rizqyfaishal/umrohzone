<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->increments('id');
            $table->char('kode_booking',6);
            $table->integer('harga');
            $table->date('waktu');
            $table->integer('durasi')->unsigned();
            $table->string('lokasi_berangkat');
            $table->integer('hotel_id')->unsigned();
            $table->foreign('hotel_id')
                ->references('id')
                ->on('hotel')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('kuota')->unsigned();
            $table->integer('discount')->unsigned();
            $table->integer('pesawat_id')->unsigned();
            $table->foreign('pesawat_id')
                ->references('id')
                ->on('pesawat')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('agen_id')->unsigned();
            $table->foreign('agen_id')
                ->references('id')
                ->on('agen')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::drop('pakets');
    }
}
