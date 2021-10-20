<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon;

class ChallengesCategories extends Model
{
    protected $table = 'challenges_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];

    public function challenges()
    {
        return $this->hasMany(\App\Models\Challenges::class, 'challenges_categories_id', 'id');
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
