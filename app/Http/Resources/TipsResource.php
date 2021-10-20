<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TipsResource extends JsonResource
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
            'tip' => $this->tip,
        ];
    }
}
