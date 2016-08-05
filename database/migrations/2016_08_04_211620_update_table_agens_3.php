<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableAgens3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agen', function (Blueprint $table) {
            $table->dropColumn('no_rekening');
            $table->dropColumn('bank');
            $table->integer('rekening_id')->unsigned();
            $table->foreign('rekening_id')
                ->references('id')
                ->on('rekening')
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
            $table->dropForeign('rekening_id');
            $table->dropColumn('rekening_id');
            $table->string('no_rekening');
            $table->string('bank');
        });
    }
}
