<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketFasilitasPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_fasilitas_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paket_id')->unsigned();
            $table->integer('fasilitas_id')->unsigned();
            $table->foreign('paket_id')
                ->references('id')
                ->on('paket')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('fasilitas_id')
                ->references('id')
                ->on('fasilitas')
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
        Schema::drop('paket_fasilitas_pivot');
    }
}
