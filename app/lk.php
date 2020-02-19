<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lk extends Model
{
    //
    protected $table = 'lk';
    protected $fillable = [
        'number', 'nameA', 'nameB'
    ];
    public function stations()
    {
        return $this->belongsToMany('App\Station', 'station_lk');
    }
}
