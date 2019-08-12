<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\User;

class LocationsTableSeeder extends Seeder
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
            $location = new Location();
            $location->user_Id = $user->id;
            $location->latitude = Str::random(20);
            $location->longitude = Str::random(20);
            $location->save();
        }
    }
}
