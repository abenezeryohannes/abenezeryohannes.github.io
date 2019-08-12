<?php

namespace App\Http\Controllers;

use App\User;
use App\Location;
use App\Profile;
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
        //
        $result = User::all();
        return $result;
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
            'last_name' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'height' => 'required',
        ]);

        $user = new User();
        $user->phone_number = $validatedUser['phone_number'];
        $user->first_name = $validatedUser['first_name'];
        $user->last_name = $validatedUser['last_name'];
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
