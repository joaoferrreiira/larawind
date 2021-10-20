<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JourneysChallenges extends Model
{
    protected $table = 'journey_challenges';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'journeys_id',
        'challenge',
        'points',
    ];

    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'users_has_journey_challenges');
    }

    public function journeys()
    {
        return $this->belongsTo(\App\Models\Journeys::class, 'journeys_id', 'id');
    }

    public function getCreatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
    }

    public function getUpdatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
    }
}
