<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon;

class Settings extends Model
{
    protected $table = 'settings';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'terms', 
        'privacy_politics'
    ];

    public function getCreatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
    }

    public function getUpdatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
    }

}
