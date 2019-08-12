<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('picture_id')->nullable();
            $table->bigInteger('answare_id')->nullable();
            $table->boolean('notified');
            $table->string('comment');
            $table->string('type');
            $table->timestamps("date");
        });

        
         
        Schema::table('likes', function(Blueprint $table){

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('picture_id')->references('id')->on('pictures');
            $table->foreign('answare_id')->references('id')->on('answares');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
