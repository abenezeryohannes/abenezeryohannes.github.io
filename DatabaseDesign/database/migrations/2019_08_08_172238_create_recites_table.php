<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('payment_type_id');
            $table->timestamps("date");
        });

       
        Schema::table('recites', function(Blueprint $table){

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_type_id')->references('id')->on('payment_type');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recites');
    }
}
