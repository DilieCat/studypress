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
<<<<<<< HEAD
            $table->timestamps();
=======
            $table->string('adres');
            $table->string('woonplaats');
            $table->integer('ov_nummer');
            $table->string('cohort');
            $table->integer('klas_id');
            $table->integer('opleiding_id');
>>>>>>> ba4e8a5e481fd1d3467b8e5ea1fef3d0c02b4935
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
