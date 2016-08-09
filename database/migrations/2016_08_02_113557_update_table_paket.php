<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePaket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paket', function (Blueprint $table) {
            $table->integer('paket_category_id')->unsigned();
            $table->foreign('paket_category_id')
                ->references('id')
                ->on('paket_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('embarkasi_id')->unsigned();
            $table->foreign('embarkasi_id')
                ->references('id')
                ->on('embarkasis')
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
            $table->dropForeign('embarkasi_id');
            $table->dropForeign('paket_category_id');
            $table->dropColumn('paket_category_id');
            $table->dropColumn('embarkasi_id');
        });
    }
}
