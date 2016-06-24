<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->integer('view_counter')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('rate_visual')->unsigned();
            $table->integer('rate_gameplay')->unsigned();
            $table->integer('rate_history')->unsigned();
            $table->integer('rate_entertainment')->unsigned();
            $table->text('summary');
            $table->boolean('active')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::create('review_tag', function (Blueprint $table) {
            $table->integer('review_id')->unsigned()->index();
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');

            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });

        Schema::create('review_upload', function (Blueprint $table) {
            $table->integer('review_id')->unsigned()->index();
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');

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
        Schema::drop('review_upload');
        Schema::drop('review_tag');
        Schema::drop('reviews');
    }
}
