<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id_1');
            $table->bigInteger('user_id_2');
            $table->boolean('status');
            $table->timestamps("date");
        });

        
         
        Schema::table('matches', function(Blueprint $table){

            $table->foreign('user_id_1')->references('id')->on('users');
            $table->foreign('user_id_2')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
