<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wards')->delete();
        
        \DB::table('wards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ward' => 'Akheri',
                'district_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'ward' => 'Kikatiti',
                'district_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'ward' => 'Kikwe',
                'district_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'ward' => 'King"ori',
                'district_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'ward' => 'Leguruki',
                'district_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'ward' => 'Maji ya Chai',
                'district_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'ward' => 'Makiba',
                'district_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'ward' => 'Maroroni',
                'district_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'ward' => 'Mbuguni',
                'district_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'ward' => 'Ngarenanyuki',
                'district_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'ward' => 'Nkoanrua',
                'district_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'ward' => 'Nkoarisambu',
                'district_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'ward' => 'Poli',
                'district_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'ward' => 'Seela Sing"isi',
                'district_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'ward' => 'Songoro, Meru',
                'district_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'ward' => 'Usa River',
                'district_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'ward' => 'Nkoaranga',
                'district_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'ward' => 'Baraa',
                'district_id' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'ward' => 'Daraja Mbili',
                'district_id' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'ward' => 'Elerai',
                'district_id' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'ward' => 'Engutoto',
                'district_id' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'ward' => 'Kaloleni',
                'district_id' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'ward' => 'Kati',
                'district_id' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'ward' => 'Kimandolu',
                'district_id' => 2,
            ),
            24 => 
            array (
                'id' => 25,
                'ward' => 'Lemara',
                'district_id' => 2,
            ),
            25 => 
            array (
                'id' => 26,
                'ward' => 'Levolosi',
                'district_id' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'ward' => 'Moshono',
                'district_id' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'ward' => 'Ngarenaro',
                'district_id' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'ward' => 'Oloirien',
                'district_id' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'ward' => 'Sekei',
                'district_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'ward' => 'Sokon I',
                'district_id' => 2,
            ),
            31 => 
            array (
                'id' => 32,
                'ward' => 'Sombetini',
                'district_id' => 2,
            ),
            32 => 
            array (
                'id' => 33,
                'ward' => 'Themi',
                'district_id' => 2,
            ),
            33 => 
            array (
                'id' => 34,
                'ward' => 'Unga L.T.D.',
                'district_id' => 2,
            ),
            34 => 
            array (
                'id' => 35,
                'ward' => 'Olasiti',
                'district_id' => 2,
            ),
            35 => 
            array (
                'id' => 36,
                'ward' => 'Terrat',
                'district_id' => 2,
            ),
            36 => 
            array (
                'id' => 37,
                'ward' => 'Bangata',
                'district_id' => 3,
            ),
            37 => 
            array (
                'id' => 38,
                'ward' => 'Bwawani',
                'district_id' => 3,
            ),
            38 => 
            array (
                'id' => 39,
                'ward' => 'Ilkiding"a',
                'district_id' => 3,
            ),
            39 => 
            array (
                'id' => 40,
                'ward' => 'Kiranyi',
                'district_id' => 3,
            ),
            40 => 
            array (
                'id' => 41,
                'ward' => 'Kisongo',
                'district_id' => 3,
            ),
            41 => 
            array (
                'id' => 42,
                'ward' => 'Kimnyaki',
                'district_id' => 3,
            ),
            42 => 
            array (
                'id' => 43,
                'ward' => 'Mlangarini',
                'district_id' => 3,
            ),
            43 => 
            array (
                'id' => 44,
                'ward' => 'Moivo',
                'district_id' => 3,
            ),
            44 => 
            array (
                'id' => 45,
                'ward' => 'Mussa',
                'district_id' => 3,
            ),
            45 => 
            array (
                'id' => 46,
                'ward' => 'Mwandeti',
                'district_id' => 3,
            ),
            46 => 
            array (
                'id' => 47,
                'ward' => 'Nduruma',
                'district_id' => 3,
            ),
            47 => 
            array (
                'id' => 48,
                'ward' => 'Olasiti',
                'district_id' => 3,
            ),
            48 => 
            array (
                'id' => 49,
                'ward' => 'Olkokola',
                'district_id' => 3,
            ),
            49 => 
            array (
                'id' => 50,
                'ward' => 'Oldonyosambu',
                'district_id' => 3,
            ),
            50 => 
            array (
                'id' => 51,
                'ward' => 'Oljoro',
                'district_id' => 3,
            ),
            51 => 
            array (
                'id' => 52,
                'ward' => 'Olmotonyi',
                'district_id' => 3,
            ),
            52 => 
            array (
                'id' => 53,
                'ward' => 'Olorieni',
                'district_id' => 3,
            ),
            53 => 
            array (
                'id' => 54,
                'ward' => 'Oltroto',
                'district_id' => 3,
            ),
            54 => 
            array (
                'id' => 55,
                'ward' => 'Oltrumet',
                'district_id' => 3,
            ),
            55 => 
            array (
                'id' => 56,
                'ward' => 'Sambasha',
                'district_id' => 3,
            ),
            56 => 
            array (
                'id' => 57,
                'ward' => 'Mateves',
                'district_id' => 3,
            ),
            57 => 
            array (
                'id' => 58,
                'ward' => 'Kisongo',
                'district_id' => 3,
            ),
            58 => 
            array (
                'id' => 59,
                'ward' => 'Sokon II',
                'district_id' => 3,
            ),
            59 => 
            array (
                'id' => 60,
                'ward' => 'Baray',
                'district_id' => 4,
            ),
            60 => 
            array (
                'id' => 61,
                'ward' => 'Buger',
                'district_id' => 4,
            ),
            61 => 
            array (
                'id' => 62,
                'ward' => 'Daa',
                'district_id' => 4,
            ),
            62 => 
            array (
                'id' => 63,
                'ward' => 'Endabash',
                'district_id' => 4,
            ),
            63 => 
            array (
                'id' => 64,
                'ward' => 'Endamaghang',
                'district_id' => 4,
            ),
            64 => 
            array (
                'id' => 65,
                'ward' => 'Endamarariek',
                'district_id' => 4,
            ),
            65 => 
            array (
                'id' => 66,
                'ward' => 'Ganako',
                'district_id' => 4,
            ),
            66 => 
            array (
                'id' => 67,
                'ward' => 'Kansay',
                'district_id' => 4,
            ),
            67 => 
            array (
                'id' => 68,
                'ward' => 'Karatu',
                'district_id' => 4,
            ),
            68 => 
            array (
                'id' => 69,
                'ward' => 'Mang"ola',
                'district_id' => 4,
            ),
            69 => 
            array (
                'id' => 70,
                'ward' => 'Mbulumbulu',
                'district_id' => 4,
            ),
            70 => 
            array (
                'id' => 71,
                'ward' => 'Oldeani',
                'district_id' => 4,
            ),
            71 => 
            array (
                'id' => 72,
                'ward' => 'Qurus',
                'district_id' => 4,
            ),
            72 => 
            array (
                'id' => 73,
                'ward' => 'Rhotia',
                'district_id' => 4,
            ),
            73 => 
            array (
                'id' => 74,
                'ward' => 'Elang"ata Dapash',
                'district_id' => 5,
            ),
            74 => 
            array (
                'id' => 75,
                'ward' => 'Engarenaibor',
                'district_id' => 5,
            ),
            75 => 
            array (
                'id' => 76,
                'ward' => 'Engikaret',
                'district_id' => 5,
            ),
            76 => 
            array (
                'id' => 77,
                'ward' => 'Gelai Lumbwa',
                'district_id' => 5,
            ),
            77 => 
            array (
                'id' => 78,
                'ward' => 'Gelai Meirugoi',
                'district_id' => 5,
            ),
            78 => 
            array (
                'id' => 79,
                'ward' => 'Iloirienito',
                'district_id' => 5,
            ),
            79 => 
            array (
                'id' => 80,
                'ward' => 'Kamwanga',
                'district_id' => 5,
            ),
            80 => 
            array (
                'id' => 81,
                'ward' => 'Kitumbeine',
                'district_id' => 5,
            ),
            81 => 
            array (
                'id' => 82,
                'ward' => 'Kimokouwa',
                'district_id' => 5,
            ),
            82 => 
            array (
                'id' => 83,
                'ward' => 'Longido',
                'district_id' => 5,
            ),
            83 => 
            array (
                'id' => 84,
                'ward' => 'Matale',
                'district_id' => 5,
            ),
            84 => 
            array (
                'id' => 85,
                'ward' => 'Mundarara',
                'district_id' => 5,
            ),
            85 => 
            array (
                'id' => 86,
                'ward' => 'Namanga',
                'district_id' => 5,
            ),
            86 => 
            array (
                'id' => 87,
                'ward' => 'Olmolog',
                'district_id' => 5,
            ),
            87 => 
            array (
                'id' => 88,
                'ward' => 'Orbomba',
                'district_id' => 5,
            ),
            88 => 
            array (
                'id' => 89,
                'ward' => 'Tingatinga',
                'district_id' => 5,
            ),
            89 => 
            array (
                'id' => 90,
                'ward' => 'Engaruka',
                'district_id' => 6,
            ),
            90 => 
            array (
                'id' => 91,
                'ward' => 'Engutoto, Monduli',
                'district_id' => 6,
            ),
            91 => 
            array (
                'id' => 92,
                'ward' => 'Esilalei',
                'district_id' => 6,
            ),
            92 => 
            array (
                'id' => 93,
                'ward' => 'Lepurko',
                'district_id' => 6,
            ),
            93 => 
            array (
                'id' => 94,
                'ward' => 'Lolkisale',
                'district_id' => 6,
            ),
            94 => 
            array (
                'id' => 95,
                'ward' => 'Majengo, Monduli',
                'district_id' => 6,
            ),
            95 => 
            array (
                'id' => 96,
                'ward' => 'Makuyuni',
                'district_id' => 6,
            ),
            96 => 
            array (
                'id' => 97,
                'ward' => 'Meserani, Monduli',
                'district_id' => 6,
            ),
            97 => 
            array (
                'id' => 98,
                'ward' => 'Moita',
                'district_id' => 6,
            ),
            98 => 
            array (
                'id' => 99,
                'ward' => 'Monduli Juu',
                'district_id' => 6,
            ),
            99 => 
            array (
                'id' => 100,
                'ward' => 'Monduli Mjini',
                'district_id' => 6,
            ),
            100 => 
            array (
                'id' => 101,
                'ward' => 'Mswakini',
                'district_id' => 6,
            ),
            101 => 
            array (
                'id' => 102,
                'ward' => 'Mto wa Mbu',
                'district_id' => 6,
            ),
            102 => 
            array (
                'id' => 103,
                'ward' => 'Selela',
                'district_id' => 6,
            ),
            103 => 
            array (
                'id' => 104,
                'ward' => 'Sepeko',
                'district_id' => 6,
            ),
            104 => 
            array (
                'id' => 105,
                'ward' => 'Alailelai',
                'district_id' => 7,
            ),
            105 => 
            array (
                'id' => 106,
                'ward' => 'Arash',
                'district_id' => 7,
            ),
            106 => 
            array (
                'id' => 107,
                'ward' => 'Digodigo',
                'district_id' => 7,
            ),
            107 => 
            array (
                'id' => 108,
                'ward' => 'Enduleni',
                'district_id' => 7,
            ),
            108 => 
            array (
                'id' => 109,
                'ward' => 'Enguserosambu',
                'district_id' => 7,
            ),
            109 => 
            array (
                'id' => 110,
                'ward' => 'Kakesio',
                'district_id' => 7,
            ),
            110 => 
            array (
                'id' => 111,
                'ward' => 'Maalon',
                'district_id' => 7,
            ),
            111 => 
            array (
                'id' => 112,
                'ward' => 'Malambo',
                'district_id' => 7,
            ),
            112 => 
            array (
                'id' => 113,
                'ward' => 'Nainokanoka',
                'district_id' => 7,
            ),
            113 => 
            array (
                'id' => 114,
                'ward' => 'Nayobi',
                'district_id' => 7,
            ),
            114 => 
            array (
                'id' => 115,
                'ward' => 'Ngorongoro',
                'district_id' => 7,
            ),
            115 => 
            array (
                'id' => 116,
                'ward' => 'Olbalbal',
                'district_id' => 7,
            ),
            116 => 
            array (
                'id' => 117,
                'ward' => 'Oldonyo-Sambu',
                'district_id' => 7,
            ),
            117 => 
            array (
                'id' => 118,
                'ward' => 'Oloipiri',
                'district_id' => 7,
            ),
            118 => 
            array (
                'id' => 119,
                'ward' => 'Oloirien',
                'district_id' => 7,
            ),
            119 => 
            array (
                'id' => 120,
                'ward' => 'Ololosokwan',
                'district_id' => 7,
            ),
            120 => 
            array (
                'id' => 121,
                'ward' => 'Orgosorok',
                'district_id' => 7,
            ),
            121 => 
            array (
                'id' => 122,
                'ward' => 'Pinyinyi',
                'district_id' => 7,
            ),
            122 => 
            array (
                'id' => 123,
                'ward' => 'Sale',
                'district_id' => 7,
            ),
            123 => 
            array (
                'id' => 124,
                'ward' => 'Samunge',
                'district_id' => 7,
            ),
            124 => 
            array (
                'id' => 125,
                'ward' => 'Soit Sambu',
                'district_id' => 7,
            ),
        ));
        
        
    }
}