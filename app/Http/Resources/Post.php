<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return  [
            'id' => $this -> id,
            'title' => $this -> title,
            'content' => $this -> body,
            'user_id' => $this -> user_id,
            'cover_img' => $this -> cover_image,
            

        ];
    }
    public function with($request){
        return [
            'version' => '1.0.0',
            'author_url' => url('https://wwww.alphateds.com')
        ];
        
    }
}
