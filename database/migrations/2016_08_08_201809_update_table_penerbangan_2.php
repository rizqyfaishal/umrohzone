<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePenerbangan2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penerbangan', function (Blueprint $table) {
            $table->integer('jenis_penerbangan')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penerbangan', function (Blueprint $table) {
            $table->dropColumn('jenis_penerbangan');
        });
    }
}
