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
            $table->bigIncrements('profile_id');
            $table->bigInteger('user_id');
            $table->bigInteger('kids_id');
            $table->bigInteger('education_id');
            $table->bigInteger('religion_id');
            $table->bigInteger('politic_id');
            $table->string('sex');
            $table->float('height');
            $table->string('work');
            $table->string('job');
            $table->string('school');
            $table->string('height');
            $table->boolean('drinking');
            $table->boolean('smoking');
            $table->timestamps();
        });

        Schema::table('profiles', function(Blueprint $table){

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
        Schema::dropIfExists('profiles');
    }
}
