<?php

use Illuminate\Database\Seeder;
use App\Profile;
use App\LanguageProfile;

class Language_ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = Profile::all();

        foreach($profiles as $profile){
            $languageprofile = new LanguageProfile();
            $languageprofile->language_id = rand(1, 10);
            $languageprofile->profile_id = $profile->id;
            $languageprofile->save();
        }
    }
}
