<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use App\Answare;

class AnswaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();


        foreach($users as $user){
            $faker = new Faker();
            $answare1 = new Answare();
            $answare1->user_id = $user->id;
            $answare1->question_id = rand(1, 30);
            $answare1->answare = Str::random(10);
            $answare1->save();
        }
        
    }
}
