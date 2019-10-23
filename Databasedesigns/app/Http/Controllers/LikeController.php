<?php

namespace App\Http\Controllers;

use App\Http\Resources\LikePeopleResource\LikeResource;
use App\Like;
use App\Swipe;
use App\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likers(Request $request){
        $validatedUser = $request->validate([
            'user_id' => 'required',
        ]);

        $likers = Like::Where('liked_user_id', '=', $request['user_id'])->get();
        return LikeResource::collection($likers);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function like(Request $request)
    {
        $validatedUser = $request->validate([
        'liker_id' => 'required',
        'liked_id' => 'required',
    ]);
            if($request['answer_id'] == null && $request['picture_id']) response()->json( [
                "status" => "un successfull"
            ]);

        $like = new Like();
        $like->liker_user_id = $request['liker_id'];
        $like->liked_user_id = $request['liked_id'];
        
        if(($request['picture_id']!=null))
            $like->picture_id = $request['picture_id'];
        
        if($request['answer_id']!=null)
            $like->answare_id = $request['answer_id'];

        $like->notified = false;
        $like->comment = $request['comment'];
        $like->save();

        return response()->json( [
            "status" => "successfull"
        ]);

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
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        //
    }
}
