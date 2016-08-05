<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paket_id')->unsigned();
            $table->foreign('paket_id')
                ->references('id')
                ->on('paket')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->date('start_date');
            $table->date('due_date');
            $table->decimal('price');
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
        Schema::drop('promos');
    }
}
