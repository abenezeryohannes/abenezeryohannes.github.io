<?php

namespace App\Http\Controllers;

use App\Http\Resources\FindPeopleResource\LikeResource;
use App\Like;
use App\User;
use App\Height;
use App\Kid;
use App\Education;
use App\Religion;
use App\Politic;
use App\Profile;
use App\Preference;
use App\Picture;
use App\Smoke;
use App\Drink;
use App\Language;
use App\Answare;
use App\Location;
use App\FamilyPlan;
use App\Http\Resources\Height as HeightResource;

use App\Http\Resources\FindPeopleResource\Q_and_AFPResource as QandAFPResource;
use App\Http\Resources\FindPeopleResource\PictureFPResource as PictureFPResource;
use App\Http\Resources\FindPeopleResource\ProfileFPResource as ProfileFPResource;
use App\Http\Resources\FindPeopleResource\UserFPResource as UserFPResource;
use App\Http\Resources\FindPeopleResource\LocationFPResource as LocationFPResource;


use App\Http\Resources\Education as EducationResource;
use App\Http\Resources\Religion as ReligionResource;
use App\Http\Resources\Politic as PoliticResource;
use App\Http\Resources\Smoke as SmokeResource;
use App\Http\Resources\Drink as DrinkResource;
use App\Http\Resources\Language as LanguageResource;
use App\Http\Resources\Kid as KidResource;
use App\Http\Resources\FamilyPlan as FamilyPlanResource;
use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = User::all();
        return $result;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $validatedUser = $request->validate([
            'phone_number' => 'required'
            ]);

            
        $user = new User;
        $user->phone_number = $request->phone_number;
        // $user->first_name = $request->first_name;
        // $user->last_name = $request->last_name;
        $user->save();

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->save();


        $preference = new Preference();
        $preference->user_id = $user->id;
        $preference->save();


        return response()->json([
                "user_id" => $user->id,
                "profile_id" => $profile->id,
                "preference_id" => $preference->id
        ]);


        return new UserResource($user);
    }


    public function findPeoples(Request $request){
        
        $validatedUser = $request->validate([
            
            'user_id' => 'required',
            
            'latitude' => 'required',
            
            'longitude' => 'required',
            
            'distance_limit' => 'required'
            ]);

        // $picture = PictureFPResource::collection( Picture::Where('user_id', '=', $request['user_id'])->get());
 
        // $question_and_answare =  QandAFPResource::collection( Answare::Where('user_id', '=', $request['user_id'])->get());
        
        // $location = new LocationFPResource(Location::Where('user_id', '=', $request['user_id'])->first());


        $profile = ProfileFPResource::collection(Profile::where('user_id', '!=', $request['user_id'])->paginate(3));

        return $profile;
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signUp(Request $request){

        $validatedUser = $request->validate([
            'phone_number' => 'required',
            'first_name' => 'required',
            'sex' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'height' => 'required',
        ]);

        $user = new User();
        $user->phone_number = $validatedUser['phone_number'];
        $user->first_name = $validatedUser['first_name'];
        $user->sex = $validatedUser['sex'];
        $user->email;
        $user->save();

        $location = new Location();    
        $location->user_id = $user->id;
        $location->longitude = $validatedUser['longitude'];
        $location->latitude = $validatedUser['latitude'];
        $location->save();

        $profile = new Profile();
        $profile->location = $location->id;
        $profile->user_id = $user->id;
        $profile->sex = $validateUser->sex;
        
        
        return new UserResource($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answare  $answare
     * @return \Illuminate\Http\Response
     */
    public function show(Answare $answare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answare  $answare
     * @return \Illuminate\Http\Response
     */
    public function edit(Answare $answare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answare  $answare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answare $answare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answare  $answare
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answare $answare)
    {
        //
    }




    public function getVgetVitalsStruct(){
        

        $heights = HeightResource::collection(Height::all());
        $kids = KidResource::collection(Kid::all());
        $education = EducationResource::collection(Education::all());
        $language = LanguageResource::collection(Language::all());
        $Politic = PoliticResource::collection(Politic::all());
        $religion = ReligionResource::collection(Religion::all());
        $smoke = SmokeResource::collection(Smoke::all());
        $drink = DrinkResource::collection(Drink::all());
        $familyPlan = FamilyPlanResource::collection(FamilyPlan::all());
        $sex = ["Men", "Women"];
        $sexPref = ["Men", "Women", "both"];

        return response()->json([
                "sex" => $sex,
                "sex_preference" => $sexPref,
                "height" => $heights,
                "language" => $language,
                "kid" => $kids,
                "family_plan" => $familyPlan,
                "education" => $education,
                "religion" => $religion,
                "smoke" => $smoke,
                "drink" => $drink,
                ]);

    }



    public function submitVitals(Request $request){
        $validateUser =  $request;

        $profile = new Profile();
        $location = new Location();
        $Preference = new Preference();
        $location->user_id = $request['user_id']; 
        $location->latitude = $validateUser['latitude']; 
        $location->longitude = $validateUser['longitude'];
       // $location->save();

 
        $profile->user_id = $validateUser['user_id']; 
        $profile->kid_id = $validateUser['kid']; 
        $profile->education_id = $validateUser['education']; 
        $profile->religion_id = $validateUser['religion']; 
        $profile->politic_id = $validateUser['politic']; 
        $profile->sex = $validateUser['sex']; 
        $profile->age = $validateUser['age']; 
        $profile->height_id = $validateUser['height']; 
        $profile->work = $validateUser['work']; 
        $profile->job = $validateUser['job']; 
        $profile->school = $validateUser['school']; 
        $profile->drink_id = $validateUser['drink']; 
        $profile->smoke_id = $validateUser['smoke'];

        $Preference->user_id = $validateUser['user_id']; 
        $Preference->kid_id = $validateUser['family_plan']; 
        $Preference->sex = $validateUser['sex_preference']; 
        

        return response()->json( [
            "location" => $location,
            "profile" => $profile,
            "preference" => $Preference
        ]);


        
    }

}
