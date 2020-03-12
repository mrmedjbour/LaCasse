<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDairaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daira', function (Blueprint $table) {

            $table->addColumn('smallInteger', 'daira_id', ['length'=>3])->unsigned()->autoIncrement();
            $table->string('daira_nom',24);
            $table->addColumn('tinyInteger', 'wilaya_id', ['length'=>2, 'unsigned'=>true]);
            $table->foreign('wilaya_id')->references('wilaya_id')->on('wilaya')->onDelete('cascade');
            $table->dropForeign(['wilaya_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daira');
    }
}
