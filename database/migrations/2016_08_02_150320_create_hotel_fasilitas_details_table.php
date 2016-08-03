<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelFasilitasDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_fasilitas_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_fasilitas_id')->unsigned();
            $table->foreign('hotel_fasilitas_id')
                ->references('id')
                ->on('hotel_fasilitas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name');
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
        Schema::drop('hotel_fasilitas_details');
    }
}
