<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePenerbangans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penerbangan', function (Blueprint $table) {
            $table->integer('bandara_berangkat_id')->unsigned();
            $table->integer('terminal_berangkat_id')->unsigned();
            $table->integer('bandara_tujuan_id')->unsigned();
            $table->integer('terminal_tujuan_id')->unsigned();
            $table->foreign('bandara_berangkat_id')
                ->references('id')
                ->on('bandaras')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('terminal_berangkat_id')
                ->references('id')
                ->on('terminals')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('bandara_tujuan_id')
                ->references('id')
                ->on('bandaras')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('terminal_tujuan_id')
                ->references('id')
                ->on('terminals')
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
            $table->dropForeign('bandara_berangkat_id');
            $table->dropForeign('bandara_tujuan_id');
            $table->dropForeign('terminal_tujuan_id');
            $table->dropForeign('terminal_berangkat_id');

            $table->dropColumn('bandara_berangkat_id');
            $table->dropColumn('bandara_tujuan_id');
            $table->dropColumn('terminal_tujuan_id');
            $table->dropColumn('terminal_berangkat_id');

        });
    }
}
