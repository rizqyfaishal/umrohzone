<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbarkasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embarkasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('bandara');
            $table->integer('regency_id')->unsigned();
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
        Schema::drop('embarkasis');
    }
}
