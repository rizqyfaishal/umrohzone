<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->char('no_agen',6);
            $table->string('direktur');
            $table->string('kontak_direktur');
            $table->integer('ppij');
            $table->string('bank');
            $table->string('no_rekening');
            $table->string('nama_agen');
            $table->string('alamat');
            $table->integer('rating');
            $table->string('propinsi');
            $table->string('kota');
            $table->string('status_visa');
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
        Schema::drop('agens');
    }
}
