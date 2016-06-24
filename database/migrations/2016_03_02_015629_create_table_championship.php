<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChampionship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->text('image');
            $table->integer('year');
            $table->date('dt_begin');
            $table->date('dt_end');
            $table->integer('game_id')->unsigned();
            $table->integer('region_id')->unsigned();
            $table->integer('type_championship_id')->unsigned();
            $table->boolean('finished');
            $table->boolean('active');
            $table->timestamps();

            $table->foreign('game_id')
                ->references('id')
                ->on('games')
                ->onDelete('cascade');

            $table->foreign('region_id')
                ->references('id')
                ->on('regions')
                ->onDelete('cascade');

            $table->foreign('type_championship_id')
                ->references('id')
                ->on('type_championships')
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
        Schema::drop('championships');
    }
}
