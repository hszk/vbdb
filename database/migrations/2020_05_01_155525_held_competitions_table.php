<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaleHeldCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('held_competitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 8);
            $table->integer('year');
            $table->integer('competition_id');
            $table->enum('sex', ['male', 'female']);
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
        Schema::dropIfExists('held_competitions');
    }
}
