<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaleSelectedPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selected_players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('held_competition_id');
            $table->integer('country_id');
            $table->integer('player_id');
            $table->enum('sex', ['male', 'female']);
            $table->tinyInteger('uniform_number');
            $table->tinyInteger('position_id');
            $table->softDeletes();
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
        Schema::dropIfExists('selected_players');
    }
}
