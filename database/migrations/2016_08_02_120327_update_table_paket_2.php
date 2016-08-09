<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePaket2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paket', function (Blueprint $table) {
            $table->integer('penerbangan_berangkat_id')->unsigned();
            $table->integer('penerbangan_pulang_id')->unsigned();
            $table->foreign('penerbangan_berangkat_id')
                ->references('id')
                ->on('penerbangan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('penerbangan_pulang_id')
                ->references('id')
                ->on('penerbangan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('fasilitas_id')->unsigned();
            $table->foreign('fasilitas_id')
                ->references('id')
                ->on('fasilitas')
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
        Schema::table('paket', function (Blueprint $table) {
            $table->dropForeign('penerbangan_berangkat_id');
            $table->dropForeign('penerbangan_pulang_id');
            $table->dropColumn('penerbangan_berangkat_id');
            $table->dropColumn('penerbangan_pulang_id');
        });
    }
}
