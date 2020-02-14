<?php

use Illuminate\Database\Seeder;

class RailroadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $railroads = array('1/2', '3/4', '5', '6/7cd', '7ab/8');
        for($k = 1; $k<=3; $k++)
        {
            for($i = 0; $i < count($railroads); $i++)
            {
              DB::table('railroads')->insert([
                  'name' => $railroads[$i],
                  'station_id' => $k
              ]);
            }
        }
        
    }
}
