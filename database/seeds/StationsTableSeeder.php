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
        $stations = array('Kowalów', 'Laski Lubuskie', 'Ługi Górzyckie');
        for($i = 0; $i < 3; $i++)
        {
          DB::table('stations')->insert([
              'name' => $stations[$i],
              'comments' => Str::random(15),
              'created_at' => now(),
              'updated_at' => now()
          ]);
        }

    }
}
