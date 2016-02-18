<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('users_id')->unsigned();
            $table->integer('blogpost_id')->unsigned();
            $table->string('commenter');
            $table->string('email');
            $table->text('comment');
            $table->boolean('approved');
            $table->timestamps();
        });

          Schema::table('comment', function($table) {
            $table->foreign('blogpost_id')->references('id')->on('blogpost')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('comment');
    }
}
