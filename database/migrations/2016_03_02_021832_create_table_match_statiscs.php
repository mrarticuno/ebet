<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatchStatiscs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches_statics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('duration');
            $table->string('score');
            $table->integer('match_id')->unsigned();
            $table->integer('team_win_id')->unsigned();
            $table->integer('team_lost_id')->unsigned();
            $table->integer('player_mvp_id')->unsigned();
            $table->timestamps();

            $table->foreign('match_id')
                ->references('id')
                ->on('matches')
                ->onDelete('cascade');

            $table->foreign('team_win_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');

            $table->foreign('team_lost_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');

            $table->foreign('player_mvp_id')
                ->references('id')
                ->on('players')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matches_statics');
    }
}
