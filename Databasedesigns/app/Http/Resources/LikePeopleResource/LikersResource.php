<?php

namespace App\Http\Resources\LikePeopleResource;

use App\Http\Resources\FindPeopleResource\Q_and_AFPResource;
use App\Http\Resources\FindPeopleResource\PictureFPResource;

use Illuminate\Http\Resources\Json\JsonResource;


class LikersResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'question_and_answer' => new Q_and_AFPResource($this->answare),
            'picture' => new PictureFPResource($this->picture),
            'comment' => $this->comment,
            ];
    }


}
