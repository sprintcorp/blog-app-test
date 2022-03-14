<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'post_title' => $this->title,
            'post_link' => $this->link,
            'post_total_upvote' => $this->amount_of_upvotes,
            'post_author' => $this->author_name,
            'total_comments' => $this->comments->count(),
        ];
    }
}
