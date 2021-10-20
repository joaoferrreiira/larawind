<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon;

class PlantsType extends Model
{
    protected $table = 'plants_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plants_types_categories_id',
        'name',
        'icon'
    ];

    public function categories()
    {
        return $this->belongsTo(\App\Models\PlantsTypeCategory::class, 'plants_types_categories_id', 'id');
    }

    public function plants()
    {
        return $this->belongsToMany(\App\Models\Plants::class, 'plants_has_plants_types', 'plants_types_id', 'plants_id');
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
