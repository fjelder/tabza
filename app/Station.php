<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Station extends Model
{
    //
    static function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->bigIncrements('id');
        });
    }

}
