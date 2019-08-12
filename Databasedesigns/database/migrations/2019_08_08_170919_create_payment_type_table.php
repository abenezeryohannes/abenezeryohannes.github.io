<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('date_length');
            $table->integer('count')->default(0);
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::table('payment_type', function(Blueprint $table){

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_type');
    }
}
