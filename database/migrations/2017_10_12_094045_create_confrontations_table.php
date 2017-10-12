<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfrontationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confrontation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id_1');
            $table->integer('player_id_2');
            $table->enum('color_player_1',['red','blue']);
            $table->enum('color_player_2',['red','blue']);
            $table->integer('playoff_id');
            $table->integer('phase_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confrontation');
    }
}
