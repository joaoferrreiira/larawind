<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon;

class PlantsTypeCategory extends Model
{
    protected $table = 'plants_types_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function types()
    {
        return $this->hasMany(\App\Models\PlantsType::class, 'plants_types_categories_id', 'id');
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
