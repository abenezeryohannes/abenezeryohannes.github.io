<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagePreferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_preference', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('preference_id');
            $table->bigInteger('language_id');
            $table->timestamps();
        });

        
         
        Schema::table('language_preference', function(Blueprint $table){

            $table->foreign('preference_id')->references('id')->on('preferences');
            $table->foreign('language_id')->references('id')->on('languages');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_preference');
    }
}