<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_prenom',30);
            $table->string('user_nom',30);
            $table->addColumn('integer', 'user_tel', ['length' => 10, 'unsigned' => true, 'ZEROFILL' => true]);
            $table->string('user_avatar')->default('avatar.svg');
            $table->boolean('user_etat')->default(1);
            $table->string('email',35)->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->addColumn('tinyInteger', 'role_id', ['length'=>1,'unsigned'=>true])->default(5);
            $table->foreign('role_id')->references('role_id')->on('role');
            $table->smallInteger('casse_id')->unsigned()->nullable();
            $table->foreign('casse_id')->references('casse_id')->on('casse');
            $table->addColumn('smallInteger', 'commune_id', ['length'=>4, 'unsigned'=>true]);
            $table->foreign('commune_id')->references('commune_id')->on('commune');
            $table->rememberToken();
            $table->timestamps();
            $table->dropForeign(['role_id']);
            $table->dropForeign(['casse_id']);
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
        Schema::dropIfExists('users');
    }
}
