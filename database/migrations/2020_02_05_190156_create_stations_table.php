<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('comments')->nullable();
            $table->unsignedBigInteger('iz_id');
            $table->foreign('iz_id')->references('id')->on('iz');
            // $table->unsignedBigInteger('station_lk_id');
            // $table->foreign('station_lk_id')->references('id')->on('station_lk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stations');
    }
}
