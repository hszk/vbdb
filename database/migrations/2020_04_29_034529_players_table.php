<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10);
            $table->string('name', 64);
            $table->string('english_name', 64)->nullable();
            $table->enum('sex', ['male', 'female']);
            $table->integer('country_id')->nullable();
            $table->integer('team_id')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('players');
    }
}
