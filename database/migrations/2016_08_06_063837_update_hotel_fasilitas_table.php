<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateHotelFasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hotel_fasilitas', function (Blueprint $table) {
            $table->integer('hotel_fasilitas_category_id')->unsigned();
            $table->foreign('hotel_fasilitas_category_id')
                ->references('id')
                ->on('hotel_fasilitas_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotel_fasilitas', function (Blueprint $table) {
            //
        });
    }
}
