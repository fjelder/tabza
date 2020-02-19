<?php

use Illuminate\Database\Seeder;

class station_lkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            DB::table('station_lk')->insert([
                'station_id' => rand(1,3),
                'lk_id' => rand(1,3),
            ]);
        }
        
    }
}
