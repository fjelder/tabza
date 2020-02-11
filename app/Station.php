<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Station extends Model
{
    //
	    protected $fillable = [
        'name', 'comments'
    ];
	    protected $hidden = [
				'_token'
    ];

}
