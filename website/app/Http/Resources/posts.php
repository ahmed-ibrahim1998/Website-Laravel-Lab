<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class posts extends JsonResource
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
            'id'=>$this->id,
            'title'=>$this->title,
            'body'=>$this->body,
            'slug'=>$this->slug,
            'version'=>$this->version,
            'user_id'=>$this->user_id,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
//        return parent::toArray($request);
    }
}
