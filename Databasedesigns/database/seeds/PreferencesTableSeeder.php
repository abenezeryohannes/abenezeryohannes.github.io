<?php

use Illuminate\Database\Seeder;
use App\Preference;
use App\User;
class PreferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        $users = User::all();
        $sex = ["Man","Woman","Both"];
        foreach($users as $user){
            $preference  = new Preference();
            $preference->user_id = $user->id;
            $preference->sex = $sex[rand(0, 2)];
            $preference->min_height = (float) rand(160, 180) / 100;
            $preference->max_height = (float) rand(180, 200) / 100;
            $preference->min_age =rand(18, 28);
            $preference->max_age = rand(28, 40);
            
            $preference->kid_id = rand(1, 3);
            $preference->family_plan_id = rand(1, 4);
            
            $preference->drink_id = rand(1, 4);
            $preference->smoke_id = rand(1, 4);
            
            //$preference->religion_id = rand(1, 8);
            //$preference->education_id = rand(1, 4);
            //$preference->hometown = Str::random(5);
            //$preference->politic_id = rand(1, 5);
            //$preference->drinking = rand(1, 2) == 1? true:false;
            //$preference->smoking = rand(1, 2) == 1? true:false;

            $preference->save();
        }


    }
}
