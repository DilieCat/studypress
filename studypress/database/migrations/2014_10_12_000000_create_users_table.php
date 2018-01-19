<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('telnummer');
            $table->rememberToken();
            $table->timestamps();
            $table->string('adres');
            $table->string('woonplaats');
            $table->integer('ov_nummer');
            $table->string('cohort');
            $table->integer('klas_id');
            $table->integer('opleiding_id');
            $table->integer('userlevel');
            //user level is
            //0 = normale user
            //1 = leraar
            //2 = admin
    /**
     * Reverse the migrations.
     *
     * @return void
     */
});
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
