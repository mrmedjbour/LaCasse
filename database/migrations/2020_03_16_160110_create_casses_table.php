<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casse', function (Blueprint $table) {
            $table->smallIncrements('casse_id');
            $table->string('casse_nom',30);
            $table->string('casse_image',50);
            $table->string('casse_adr',50);
            $table->string('casse_loc',30);
            $table->string('casse_rc',10);
            $table->addColumn('smallInteger', 'commune_id', ['length'=>4, 'unsigned'=>true]);
            $table->foreign('commune_id')->references('commune_id')->on('commune')->onDelete('cascade');
            $table->timestamps();
            $table->dropForeign(['commune_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casse');
    }
}
