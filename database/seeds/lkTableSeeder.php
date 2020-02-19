<?php

use Illuminate\Database\Seeder;

class lkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('lk')->insert([
            'number' => '1',
            'nameA' => 'Warszawa Zachodnia',
            'nameB' => 'Katowice',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //2
        DB::table('lk')->insert([
            'number' => '3',
            'nameA' => 'Warszawa Zachodnia',
            'nameB' => 'Kunowice',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //3
        DB::table('lk')->insert([
            'number' => '14',
            'nameA' => 'Łódź Kaliska',
            'nameB' => 'Tuplice',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //4
        DB::table('lk')->insert([
            'number' => '353',
            'nameA' => 'Poznań Wschód',
            'nameB' => 'Skandawa',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //5
        DB::table('lk')->insert([
            'number' => '281',
            'nameA' => 'Oleśnica',
            'nameB' => 'Chojnice',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //6
        DB::table('lk')->insert([
            'number' => '273',
            'nameA' => 'Wrocław Główny',
            'nameB' => 'Szczecin Główny',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
