<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahromsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahroms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jamaah_id')
                ->unsigned();
            $table->foreign('jamaah_id')
                ->references('id')
                ->on('jamaahs')
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
        Schema::drop('mahroms');
    }
}
