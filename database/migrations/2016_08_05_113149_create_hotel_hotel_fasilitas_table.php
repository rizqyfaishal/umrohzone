<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelHotelFasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_hotel_fasilitas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->integer('hotel_fasilitas_id')->unsigned();
            $table->foreign('hotel_id')
                ->references('id')
                ->on('hotel')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('hotel_fasilitas_id')
                ->references('id')
                ->on('hotel_fasilitas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::drop('hotel_hotel_fasilitas');
    }
}
