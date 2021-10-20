<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class JourneyChallengesResource extends JsonResource
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
            'challenge' => $this->challenge,
            'done' => in_array($r->id_user, json_decode($this->ids_users)),
        ];
    }
}
