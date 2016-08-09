<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJamaahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamaahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pemesan_id')->unsigned();
            $table->boolean('status_paspor');
            $table->date('masa_berlaku_paspor');
            $table->string('fname');
            $table->string('mname',50);
            $table->string('lname',50);
            $table->boolean('paspor_valid');
            $table->boolean('ktp_valid');
            $table->boolean('mahrom',50);
            $table->boolean('upgrade_kamar');
            $table->boolean('upgrade_asuransi');
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
        Schema::drop('jamaahs');
    }
}
