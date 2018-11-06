<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayoffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playoffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competition_id');
            $table->integer('rule_id');
            $table->enum('sex',['m','w']);
            $table->integer('age_from')->nullable();
            $table->integer('age_to')->nullable();
            $table->integer('kg_from')->nullable();
            $table->integer('kg_to')->nullable();
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
        Schema::dropIfExists('playoffs');
    }
}
