<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogpost', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('users_id')->unsigned();
             $table->string('title');
            $table->text('content');
            $table->unsignedInteger('active');
            $table->timestamp('published_at');
            $table->timestamps();
        });

        Schema::table('blogpost', function($table) {

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blogpost');
    }
}
