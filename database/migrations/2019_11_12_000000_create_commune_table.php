<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommuneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commune', function (Blueprint $table) {
            $table->addColumn('smallInteger', 'commune_id', ['length'=>4,'unsigned'=>true])->autoIncrement();
            $table->string('commune_nom',26);
            $table->addColumn('smallInteger', 'daira_id', ['length'=>3, 'unsigned'=>true]);
            $table->foreign('daira_id')->references('daira_id')->on('daira')->onDelete('cascade');
            $table->dropForeign(['daira_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commune');
    }
}
