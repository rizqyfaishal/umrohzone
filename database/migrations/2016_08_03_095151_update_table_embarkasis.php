<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableEmbarkasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('embarkasis', function (Blueprint $table) {
            $table->foreign('bandara_id')
                ->references('id')
                ->on('bandaras')
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
        Schema::table('embarkasis', function (Blueprint $table) {
            $table->dropForeign('bandara_id');
        });
    }
}
