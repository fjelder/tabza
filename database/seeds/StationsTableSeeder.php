<?php

use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $stations = array('Poznań', 'Warszawa', 'Łódź');
        for($i = 0; $i < 3; $i++)
        {
          DB::table('stations')->insert([
              'name' => $stations[$i],
              'comments' => '',
              'iz_id' => rand(1,23),
              'created_at' => now(),
              'updated_at' => now(),
          ]);
        }
    }
}
