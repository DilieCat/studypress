<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Punten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punten', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('user_id');
            $table->integer('blok_id');
            $table->string('vak');
            $table->string('studiepunten_aantal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opleiding');
    }
}
