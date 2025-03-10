<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($r)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'points' => $this->points,
        ];
    }
}
