<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon;

class Tips extends Model
{
    protected $table = 'tips';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tip'
    ];
}
