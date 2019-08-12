<?php

use Illuminate\Database\Seeder;
use App\Language;
class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $language = new Language();
        // for($x = 0;$x<10;$x++){
        //     $language->name = Str::rand(6);
        //     $language->save();
        // }
        factory(Language::class, 10)->create();

    }
}
