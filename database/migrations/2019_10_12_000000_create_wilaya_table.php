<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWilayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilaya', function (Blueprint $table) {
            $table->addColumn('tinyInteger', 'wilaya_id', ['length'=>2, 'unsigned'=>true])->primary();
            $table->string('wilaya_nom',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wilaya');
    }
}
