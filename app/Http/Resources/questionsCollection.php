<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class questionsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'questions' => $this->collection
        ];
    }
}
