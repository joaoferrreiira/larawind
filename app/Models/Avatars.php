<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon;

class Avatars extends Model
{
    protected $table = 'avatars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar'
    ];
}
