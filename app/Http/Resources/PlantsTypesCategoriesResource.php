<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PlantsTypesCategoriesResource extends JsonResource
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
            'name' => Str::upper($this->name),
        ];
    }
}
