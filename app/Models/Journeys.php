<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journeys extends Model
{
    protected $table = 'journeys';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'max_points'
    ];

    public function challenges()
    {
        return $this->hasMany(\App\Models\JourneysChallenges::class, 'journeys_id', 'id');
    }

    /* public function getCreatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
    }

    public function getUpdatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
    } */
}
