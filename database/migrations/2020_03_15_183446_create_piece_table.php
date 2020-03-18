<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piece', function (Blueprint $table) {
            $table->smallIncrements('piece_id');
            $table->string('piece_nom', 50);
            $table->string('piece_symbole', 50)->nullable();
            $table->addColumn('tinyInteger', 'cat_id', ['length' => 2, 'unsigned' => true]);
            $table->foreign('cat_id')->references('cat_id')->on('piece_categorie')->onDelete('cascade');
            $table->dropForeign(['cat_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piece');
    }
}
