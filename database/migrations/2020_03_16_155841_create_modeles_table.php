<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modele', function (Blueprint $table) {
            $table->smallIncrements('modele_id');
            $table->string('modele_nom',30);
            $table->addColumn('smallInteger', 'marque_id', ['length'=>3, 'unsigned'=>true]);
            $table->foreign('marque_id')->references('marque_id')->on('marque')->onDelete('cascade');
            $table->dropForeign(['marque_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modele');
    }
}
