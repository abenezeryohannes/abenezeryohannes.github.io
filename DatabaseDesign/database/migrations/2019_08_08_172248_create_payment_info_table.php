<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('recite_id');
            $table->bigInteger('payment_type_id');
            $table->dateTime('date_expire');
            $table->timestamps();
        });

         
        Schema::table('payment_info', function(Blueprint $table){

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('recite_id')->references('id')->on('recites');
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
        Schema::dropIfExists('payment_info');
    }
}
