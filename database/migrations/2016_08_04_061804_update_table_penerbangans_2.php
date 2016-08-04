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
            $table->integer('pesawat_berangkat_id')->unsigned();
            $table->foreign('pesawat_berangkat_id')
                ->references('id')
                ->on('pesawat')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('pesawat_pulang_id')->unsigned();
            $table->foreign('pesawat_pulang_id')
                ->references('id')
                ->on('pesawat')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
            $table->dropForeign('pesawat_berangkat_id');
            $table->dropForeign('pesawat_pulang_id');
            $table->dropColumn('pesawat_pulang_id');
            $table->dropColumn('pesawat_berangkat_id');
        });
    }
}
