<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon;

class Prizes extends Model
{
    protected $table = 'prizes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'description'
    ];

    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'users_has_prizes');
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
