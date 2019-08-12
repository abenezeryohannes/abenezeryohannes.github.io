<?php

use Illuminate\Database\Seeder;
use App\Preference;
use App\LanguagePreference;


class Language_PreferenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preferences = Preference::all();

        foreach($preferences as $preference){
            $languagepreference = new LanguagePreference();
            $languagepreference->language_id = rand(1, 10);
            $languagepreference->preference_id = $preference->id;
            $languagepreference->save();
        }
        
    }
}
