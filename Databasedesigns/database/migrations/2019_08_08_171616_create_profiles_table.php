<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kid_id');
            $table->unsignedBigInteger('education_id');
            $table->unsignedBigInteger('religion_id');
            $table->unsignedBigInteger('politic_id');
            $table->string('sex');
            $table->integer('age');
            $table->float('height');
            $table->string('work');
            $table->string('job');
            $table->string('school');
            $table->unsignedBigInteger('drink_id');
            $table->unsignedBigInteger('smoke_id');
            $table->timestamps();
        });

        Schema::table('profiles', function(Blueprint $table){

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kid_id')->references('id')->on('kids');
            $table->foreign('education_id')->references('id')->on('educations');
            $table->foreign('religion_id')->references('id')->on('religions');
            $table->foreign('politic_id')->references('id')->on('politics');
            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->foreign('smoke_id')->references('id')->on('smokes');

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
