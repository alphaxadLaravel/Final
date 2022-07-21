<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'region' => 'Arusha',
            ),
            1 => 
            array (
                'id' => 2,
                'region' => 'Dar es Salaam',
            ),
            2 => 
            array (
                'id' => 3,
                'region' => 'Dodoma',
            ),
            3 => 
            array (
                'id' => 4,
                'region' => 'Geita',
            ),
            4 => 
            array (
                'id' => 5,
                'region' => 'Iringa',
            ),
            5 => 
            array (
                'id' => 6,
                'region' => 'Kagera',
            ),
            6 => 
            array (
                'id' => 7,
                'region' => 'Kaskazini Pemba',
            ),
            7 => 
            array (
                'id' => 8,
                'region' => 'Kaskazini Unguja',
            ),
            8 => 
            array (
                'id' => 9,
                'region' => 'Katavi',
            ),
            9 => 
            array (
                'id' => 10,
                'region' => 'Kigoma',
            ),
            10 => 
            array (
                'id' => 11,
                'region' => 'Kilimanjaro',
            ),
            11 => 
            array (
                'id' => 12,
                'region' => 'Kusini Pemba',
            ),
            12 => 
            array (
                'id' => 13,
                'region' => 'Kusini Unguja',
            ),
            13 => 
            array (
                'id' => 14,
                'region' => 'Lindi',
            ),
            14 => 
            array (
                'id' => 15,
                'region' => 'Manyara',
            ),
            15 => 
            array (
                'id' => 16,
                'region' => 'Mara',
            ),
            16 => 
            array (
                'id' => 17,
                'region' => 'Mbeya',
            ),
            17 => 
            array (
                'id' => 18,
                'region' => 'Mjini Magharibi',
            ),
            18 => 
            array (
                'id' => 19,
                'region' => 'Morogoro',
            ),
            19 => 
            array (
                'id' => 20,
                'region' => 'Mtwara',
            ),
            20 => 
            array (
                'id' => 21,
                'region' => 'Mwanza',
            ),
            21 => 
            array (
                'id' => 22,
                'region' => 'Njombe',
            ),
            22 => 
            array (
                'id' => 23,
                'region' => 'Pwani',
            ),
            23 => 
            array (
                'id' => 24,
                'region' => 'Rukwa',
            ),
            24 => 
            array (
                'id' => 25,
                'region' => 'Ruvuma',
            ),
            25 => 
            array (
                'id' => 26,
                'region' => 'Shinyanga',
            ),
            26 => 
            array (
                'id' => 27,
                'region' => 'Simiyu',
            ),
            27 => 
            array (
                'id' => 28,
                'region' => 'Singida',
            ),
            28 => 
            array (
                'id' => 29,
                'region' => 'Songwe',
            ),
            29 => 
            array (
                'id' => 30,
                'region' => 'Tabora',
            ),
            30 => 
            array (
                'id' => 31,
                'region' => 'Tanga',
            ),
        ));
        
        
    }
}