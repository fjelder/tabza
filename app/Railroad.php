<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Railroad extends Model
{
    //
    protected $fillable = [
        'name', 'station_id'
    ];
	    protected $hidden = [
				'_token'
    ];
    public $timestamps = false;
}
