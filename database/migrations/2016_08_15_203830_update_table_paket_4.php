<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePaket4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paket', function (Blueprint $table) {
            $table->integer('sisa_kuota');
            $table->string('nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paket', function (Blueprint $table) {
            $table->dropColumn('nama');
            $table->dropColumn('sisa_kuota');
        });
    }
}
