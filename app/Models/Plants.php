<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use Carbon;

class Plants extends Model
{
    protected $table = 'plants';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'scientific_name',
        'images',
        'legend',
        'origin',
        'foliage_duration',
        'flowering_season',
        'fruit_season',
        'height',
        'native_area',
        'longevity',
        'characteristics',
        'curiosities',
    ];

    public function types()
    {
        return $this->belongsToMany(\App\Models\PlantsType::class, 'plants_has_plants_types', 'plants_id', 'plants_types_id');
    }

    public function coordinates()
    {
        return $this->belongsTo(\App\Models\PlantsCoordinates::class, 'plants_id', 'id');
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
