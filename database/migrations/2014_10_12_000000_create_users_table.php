<?php

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
            $table->string('description');
            $table->string('password', 60);
            $table->string('user_token', 10)->unique();
            $table->string('reference', 10);
            $table->boolean('admin');
            $table->boolean('moderator');
            $table->boolean('can_chat');
            $table->boolean('can_bet');
            $table->boolean('active');
            $table->integer('upload_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('upload_id')
                ->references('id')
                ->on('uploads')
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
        Schema::drop('users');
    }
}
