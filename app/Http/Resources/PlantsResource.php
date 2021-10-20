<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class PlantsResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'scientificName' => $this->scientific_name,
            'images' => $this->images,
            'legend' => $this->legend,
            'origin' => $this->origin,
            'foliageDuration' => $this->foliage_duration,
            'floweringSeason' => $this->flowering_season,
            'fruitSeason' => $this->fruit_season,
            'height' => $this->height,
            'location' => $this->native_area,
            'age' => $this->longevity,
            'characteristics' => $this->characteristics,
            'curiosities' => $this->curiosities,
        ];
    }
}
