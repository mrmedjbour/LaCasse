<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncluresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inclure', function (Blueprint $table) {
            $table->integer('annonce_id')->unsigned();
            $table->foreign('annonce_id')->references('annonce_id')->on('annonce')->onDelete('cascade');
            $table->smallinteger('piece_id')->unsigned();
            $table->foreign('piece_id')->references('piece_id')->on('piece')->onDelete('cascade');
            $table->dropForeign(['piece_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inclure');
    }
}
