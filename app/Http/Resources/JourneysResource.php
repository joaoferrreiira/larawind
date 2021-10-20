<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class JourneysResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $r
     * @return array
     */
    public function toArray($r)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'max_points' => $this->max_points,
        ];
    }
}
