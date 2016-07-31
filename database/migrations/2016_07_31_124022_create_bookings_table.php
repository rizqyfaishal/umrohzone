<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->char('kode_booking',6);
            $table->integer('user_id')->unsigned();
            $table->boolean('status_payment');
            $table->boolean('status_dokumen');
            $table->boolean('status_visa');
            $table->softDeletes();
            $table->char('no_resi',10);
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
        Schema::drop('bookings');
    }
}
