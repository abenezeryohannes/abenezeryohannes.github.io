<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\User;
use App\Http\Resources\User as UserResource;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/me', 'UserController@create')->middleware('auth:api');



//Home Controller
// find peoples
Route::post('/findpeoples', "UserController@findPeoples");
Route::post('/swipe_left', "SwipeController@swipeLeft");

//Like Controller
Route::post('/likers', "LikeController@likers");
Route::post('/like', "LikeController@like");

// signUp Users
Route::post('/signup', "UserController@signUp");
Route::get('/getvitalsstruct','UserController@getVgetVitalsStruct');
Route::post('/submitVitals', 'userController@submitVitals');




// list Users
Route::get('users', function(){
        return new UserResource(user::findorfail(1));
});

// list single User
Route::get('getusers/{id}', function($id){
    return UserResource(user::findorfail($id));
});

//create new User
Route::post('postusers', 'UserController@store');
//update User 
Route::put('putusers', 'UserController@store');
//Delete user
Route::delete('deleteusers', 'userController@destroy');
