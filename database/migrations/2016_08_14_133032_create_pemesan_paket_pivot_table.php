<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanPaketPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesan_paket_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paket_id')->unsigned();
            $table->integer('pemesan_id')->unsigned();
            $table->foreign('paket_id')
                ->references('id')
                ->on('paket')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('pemesan_id')
                ->references('id')
                ->on('pemesans')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::drop('pemesan_paket_pivot');
    }
}
