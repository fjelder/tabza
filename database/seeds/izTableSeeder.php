<?php

use Illuminate\Database\Seeder;

class izTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Białymstoku',
            'street' => 'Kopernika',
            'number' => '58',
            'city' => 'Białystok',
            'postcode' => '15397',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //2
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Bydgoszczy',
            'street' => 'Zygmunta Augusta',
            'number' => '1',
            'city' => 'Bydgoszcz',
            'postcode' => '85082',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //3
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Częstochowie',
            'street' => 'Boya-Żeleńskiego',
            'number' => '7/9',
            'city' => 'Częstochowa',
            'postcode' => '42200',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //4
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Gdyni',
            'street' => 'Morska',
            'number' => '24',
            'city' => 'Gdynia',
            'postcode' => '81333',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //5
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Kielcach',
            'street' => 'Paderewskiego',
            'number' => '43/45',
            'city' => 'Kielce',
            'postcode' => '25502',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //6
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Krakowie',
            'street' => 'Pl. Matejki',
            'number' => '12',
            'city' => 'Kraków',
            'postcode' => '31157',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //7
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Lublinie',
            'street' => 'Okopowa',
            'number' => '5',
            'city' => 'Lublin',
            'postcode' => '20022',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //8
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Łodzi',
            'street' => 'Tuwima',
            'number' => '28',
            'city' => 'Łódź',
            'postcode' => '90002',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //9
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Nowym Sączu',
            'street' => 'Batorego',
            'number' => '80',
            'city' => 'Nowy Sącz',
            'postcode' => '33300',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //10
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Olsztynie',
            'street' => 'Lubelska',
            'number' => '5',
            'city' => 'Olsztyn',
            'postcode' => '10404',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //11
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Opolu',
            'street' => 'Księcia Jana Dobrego',
            'number' => '1',
            'city' => 'Opole',
            'postcode' => '45090',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //12
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Ostrowie Wielkopolskim',
            'street' => 'Wolności',
            'number' => '30',
            'city' => 'Ostrów Wielkopolski',
            'postcode' => '63400',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //13
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Poznaniu',
            'street' => 'al. Niepodległości 8',
            'number' => '8',
            'city' => 'Poznań',
            'postcode' => '61875',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //14
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Rzeszowie',
            'street' => 'St. Batorego',
            'number' => '24',
            'city' => 'Rzeszów',
            'postcode' => '35005',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //15
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Siedlcach',
            'street' => 'Zbrojna',
            'number' => '39',
            'city' => 'Siedlce',
            'postcode' => '08110',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //16
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Skarżysku Kamiennej',
            'street' => 'Rejowska',
            'number' => '29',
            'city' => 'Skarżysko Kamienna',
            'postcode' => '26110',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //17
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Sosnowcu',
            'street' => '3 Maja',
            'number' => '16',
            'city' => 'Sosnowiec',
            'postcode' => '41200',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //18
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Szczecinie',
            'street' => 'Korzeniowskiego',
            'number' => '1',
            'city' => 'Szczecin',
            'postcode' => '70211',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //19
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Tarnowskich Górach',
            'street' => 'Nakielska',
            'number' => '3',
            'city' => 'Tarnowie Góry',
            'postcode' => '42600',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //20
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Wałbrzychu',
            'street' => 'Parkowa',
            'number' => '9',
            'city' => 'Wałbrzych',
            'postcode' => '58302',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //21
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Warszawie',
            'street' => 'Chodakowska',
            'number' => '50',
            'city' => 'Warszawa',
            'postcode' => '03816',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //22
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych we Wrocławiu',
            'street' => 'Joannitów',
            'number' => '13',
            'city' => 'Wrocław',
            'postcode' => '50525',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //23
        DB::table('iz')->insert([
            'name' => 'Zakład Linii Kolejowych w Zielonej Górze',
            'street' => 'Traugutta',
            'number' => '10',
            'city' => 'Zielona Góra',
            'postcode' => '65025',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
