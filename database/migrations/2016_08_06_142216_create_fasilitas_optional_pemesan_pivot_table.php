<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasOptionalPemesanPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_optional_pemesan_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pemesan_id')->unsigned();
            $table->integer('fasilitas_optional_id')->unsigned();
            $table->foreign('pemesan_id')
                ->references('id')
                ->on('pemesans')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('fasilitas_optional_id')
                ->references('id')
                ->on('fasilitas_optionals')
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
        Schema::drop('fasilitas_optional_pemesan_pivot');
    }
}
