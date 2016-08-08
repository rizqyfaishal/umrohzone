<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePenerbangans2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penerbangan', function (Blueprint $table) {
            $table->integer('pesawat_id')->unsigned();
            $table->foreign('pesawat_id')
                ->references('id')
                ->on('pesawat')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
            $table->dropForeign('pesawat_id');
            $table->dropColumn('pesawat_id');
        });
    }
}
