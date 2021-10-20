<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class CoordinateResource extends JsonResource
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
            'x' => $this->x,
            'y' => $this->y,
            'id_plant' => $this->id_planta,
            'icon' => DB::table('plants_types')->find(DB::table('plants')->find($this->id_planta)->id_tipo_planta)->icon,
            //'plant' => new PlantsResource(DB::table('plants')->find($this->id_planta)),
        ];
    }
}
