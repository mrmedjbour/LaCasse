<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->increments('img_id');
            $table->string('img_nom',30);
            $table->integer('annonce_id')->unsigned();
            $table->foreign('annonce_id')->references('annonce_id')->on('annonce')->onDelete('cascade');
            $table->dropForeign(['annonce_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image');
    }
}
