<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->boolean('get_promo');
            $table->boolean('get_mitra');
            $table->integer('provinsi_id')
                ->unsigned();
            $table->foreign('provinsi_id')
                ->references('id')
                ->on('provinsis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('regency_id')
                ->references('id')
                ->on('regencies')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::drop('pemesans');
    }
}
