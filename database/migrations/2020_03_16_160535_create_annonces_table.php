<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce', function (Blueprint $table) {
            $table->increments('annonce_id');
            $table->timestamp('annonce_date');
            $table->string('annonce_type',5)->default('vent');
            $table->boolean('annonce_etat')->default(1);
            $table->string('annonce_desc',500);
            $table->smallInteger('modele_id')->unsigned();
            $table->foreign('modele_id')->references('modele_id')->on('modele')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->softDeletes();
            $table->dropForeign(['modele_id']);
            $table->dropForeign(['user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonce');
    }
}
