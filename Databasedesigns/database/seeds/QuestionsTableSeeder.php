<?php

use Illuminate\Database\Seeder;
use App\Question;
use Faker\Generator as Faker;
class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    for($x = 0; $x < 30; $x++){
    //        $question = new Question();
    //        $question->name = (new Faker())->paragraph();
    //        $question->save();
    //    } 
        factory(Question::class, 30)->create();
    }
}
