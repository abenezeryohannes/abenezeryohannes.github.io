<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->float('max_height');
            $table->float('min_height');
            $table->integer('min_age');
            $table->integer('max_age');
            
            $table->bigInteger('kid_id');
            $table->bigInteger('education_id');
            $table->bigInteger('religion_id');
            $table->bigInteger('politic_id');
            $table->timestamps();
        });
        
         
        Schema::table('preferences', function(Blueprint $table){

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kid_id')->references('id')->on('kids');
            $table->foreign('education_id')->references('id')->on('educations');
            $table->foreign('religion_id')->references('id')->on('religions');
            $table->foreign('politic_id')->references('id')->on('politics');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preferences');
    }
}
