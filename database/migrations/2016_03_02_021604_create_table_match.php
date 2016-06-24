<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image');
            $table->text('link_transmission');
            $table->date('dt_match');
            $table->datetime('dt_begin');
            $table->datetime('dt_end');
            $table->integer('championship_id')->unsigned();
            $table->boolean('transmission');
            $table->boolean('finished');
            $table->boolean('active');
            $table->timestamps();

            $table->foreign('championship_id')
                ->references('id')
                ->on('championships')
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
        Schema::drop('matches');
    }
}
