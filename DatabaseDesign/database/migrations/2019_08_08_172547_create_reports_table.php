<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('reporter_id');
            $table->bigInteger('reported_id');
            $table->bigInteger('case_id');

            $table->timestamps("date");
        });

        
         
        Schema::table('reports', function(Blueprint $table){

            $table->foreign('reporter_id')->references('id')->on('users');
            $table->foreign('reported_id')->references('id')->on('users');
            $table->foreign('case_id')->references('id')->on('report_cases');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
