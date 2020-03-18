<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePieceCategorie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piece_categorie', function (Blueprint $table) {
            $table->addColumn('tinyInteger', 'cat_id', ['length'=>2,'unsigned'=>true])->autoIncrement();
            $table->string('cat_nom', 35);
            $table->string('cat_symbole', 35)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piece_categorie');
    }
}
