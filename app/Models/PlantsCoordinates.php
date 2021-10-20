<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon;

class PlantsCoordinates extends Model
{
    protected $table = 'plants_coordinates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'x',
        'y',
        'plants_id',
        'users_id'
    ];

    public function plant()
    {
        return $this->hasOne(\App\Models\Plants::class, 'id', 'plants_id');
    }

    public function user()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'users_id');
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
