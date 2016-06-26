<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->integer('view_counter')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('upload_id')->unsigned()->nullable();
            $table->boolean('active')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('upload_id')
                ->references('id')
                ->on('uploads')
                ->onDelete('cascade');
        });

        Schema::create('notice_tag', function (Blueprint $table) {
            $table->integer('notice_id')->unsigned()->index();
            $table->foreign('notice_id')->references('id')->on('notices')->onDelete('cascade');

            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });

        Schema::create('notice_upload', function (Blueprint $table) {
            $table->integer('notice_id')->unsigned()->index();
            $table->foreign('notice_id')->references('id')->on('notices')->onDelete('cascade');

            $table->integer('upload_id')->unsigned()->index();
            $table->foreign('upload_id')->references('id')->on('uploads')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notice_tag');
        Schema::drop('notice_upload');
        Schema::drop('notices');
    }
}
