<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon;

class Challenges extends Model
{
    protected $table = 'challenges';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'challenges_categories_id',
        'challenge',
        'quantity'
    ];

    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'users_has_challenges', 'challenges_id', 'users_id')
            ->withPivot('state')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsTo(\App\Models\ChallengesCategories::class, 'challenges_categories_id', 'id');
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
