<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussion', function (Blueprint $table) {
            $table->increments('disc_id');
            $table->string('disc_titre', 20);
            $table->timestamp('disc_stamp')->useCurrent();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->integer('annonce_id')->unsigned();
            $table->foreign('annonce_id')->references('annonce_id')->on('annonce');
            $table->dropForeign(['user_id']);
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
        Schema::dropIfExists('discussion');
    }
}
