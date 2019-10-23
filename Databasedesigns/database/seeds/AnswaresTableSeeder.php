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
            
            $answare1 = new Answare();
            $answare1->user_id = $user->id;
            $answare1->question_id = rand(1, 30);
            $answare1->text = Str::random(10);
            $answare1->save();
            
            $answare2 = new Answare();
            $answare2->user_id = $user->id;
            $answare2->question_id = rand(1, 30);
            $answare2->text = Str::random(10);
            $answare2->save();
            
            $answare3 = new Answare();
            $answare3->user_id = $user->id;
            $answare3->question_id = rand(1, 30);
            $answare3->text = Str::random(10);
            $answare3->save();
            
   
        }     
    }
}
