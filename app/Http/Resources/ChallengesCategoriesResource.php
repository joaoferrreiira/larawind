<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Challenges;
use App\Models\ChallengesCategories;

class ChallengesCategoriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $r
     * @return array
     */
    public function toArray($r)
    {
        return json_encode([
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'done' => 0, //$this->state(ChallengesCategories::find($this->id)->challenges, $this->id),
            'qty' => ChallengesCategories::find($this->id)->challenges->count(),
        ]);
    }

    public function state($var, $id)
    {
        $i = 0;

        foreach (User::find(1)->challenges as $c) {
            echo $c->pivot->state;
        }

        //dd($var);
        //dd(User::find(1)->challenges->where('id', 3)/* ->count() */);

        //foreach (Challenges::where('challenges_categories_id', $id)->get() as $v) {
        //    //dd($v);
        //    echo User::find(1)->challenges->where('id', $v->id)->first()->id . '-' . User::find(1)->challenges->where('id', $v->id)->count() . '<br>';
        //}

        dd('a');
        return $i;
    }
}
