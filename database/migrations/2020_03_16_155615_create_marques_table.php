<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marque', function (Blueprint $table) {
            $table->addColumn('smallInteger', 'marque_id', ['length'=>3,'autoIncrement'=>true, 'unsigned'=>true]);
            $table->string('marque_nom',20);
            $table->string('marque_symbole',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marque');
    }
}
