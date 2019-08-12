<?php

use Illuminate\Database\Seeder;
use App\Profile;
use App\User;
class ProfilesTableSeeder extends Seeder
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
            $profile  = new Profile();
            $profile->user_id = $user->id;
            $profile->sex = rand(1, 2) == 1? "Man":"Woman";
            $profile->height = (float) rand(100, 200) / 100;
            
            $profile->kid_id = rand(1, 3);
            $profile->work = Str::random(10);
            $profile->school = Str::random(10);
            $profile->job = Str::random(10);
            $profile->religion_id = rand(1, 8);
            $profile->education_id = rand(1, 4);
            
            $profile->drink_id = rand(1, 4);
            $profile->smoke_id = rand(1, 4);
            //$profile->hometown = Str::random(5);
            $profile->politic_id = rand(1, 5);
            $profile->age = rand(18, 40);

            $profile->save();
        }
    }
}
