<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandaras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('provinsi_id')
                ->unsigned();
            $table->integer('regency_id')->unsigned();
            $table->foreign('provinsi_id')
                ->references('id')
                ->on('provinsis')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('regency_id')
                ->references('id')
                ->on('regencies')
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
        Schema::drop('bandaras');
    }
}
