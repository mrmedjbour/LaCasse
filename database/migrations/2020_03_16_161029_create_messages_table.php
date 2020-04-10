<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->increments('msg_id');
            $table->string('msg_contenu', 200);
            $table->timestamp('msg_stamp')->useCurrent();
            $table->boolean('msg_etat')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->integer('disc_id')->unsigned();
            $table->foreign('disc_id')->references('disc_id')->on('discussion');
            $table->dropForeign(['user_id']);
            $table->dropForeign(['disc_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
