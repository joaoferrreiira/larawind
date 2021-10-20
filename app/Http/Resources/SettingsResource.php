<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingsResource extends JsonResource
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
            'set' => ($r->set == 'terms' ? $this->terms : $r->set == 'privacy') ? $this->privacy_politics : 'SOMETHING WENT WRONG, TRY AGAIN LATER!',
        ];
    }
}
