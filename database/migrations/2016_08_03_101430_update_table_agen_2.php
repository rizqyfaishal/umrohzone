<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableAgen2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agen', function (Blueprint $table) {
            $table->foreign('provinsi_id')
                ->references('id')
                ->on('provinsis')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('regency_id')
                ->references('id')
                ->on('regencies')
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
        Schema::table('agen', function (Blueprint $table) {
            $table->dropForeign('regency_id');
            $table->dropForeign('provinsi_id');
        });
    }
}
