<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'district' => 'Meru',
                'region_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'district' => 'Arusha City',
                'region_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'district' => 'Arusha',
                'region_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'district' => 'Karatu',
                'region_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'district' => 'Longido',
                'region_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'district' => 'Monduli',
                'region_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'district' => 'Ngorongoro',
                'region_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'district' => 'Ilala',
                'region_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'district' => 'Kinondoni',
                'region_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'district' => 'Temeke',
                'region_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'district' => 'Kigamboni',
                'region_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'district' => 'Ubungo',
                'region_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'district' => 'Bahi',
                'region_id' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'district' => 'Chamwino',
                'region_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'district' => 'Chemba',
                'region_id' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'district' => 'Dodoma',
                'region_id' => 3,
            ),
            16 => 
            array (
                'id' => 17,
                'district' => 'Kondoa',
                'region_id' => 3,
            ),
            17 => 
            array (
                'id' => 18,
                'district' => 'Kongwa',
                'region_id' => 3,
            ),
            18 => 
            array (
                'id' => 19,
                'district' => 'Mpwapwa',
                'region_id' => 3,
            ),
            19 => 
            array (
                'id' => 20,
                'district' => 'Bukombe',
                'region_id' => 4,
            ),
            20 => 
            array (
                'id' => 21,
                'district' => 'Chato',
                'region_id' => 4,
            ),
            21 => 
            array (
                'id' => 22,
                'district' => 'Geita Town',
                'region_id' => 4,
            ),
            22 => 
            array (
                'id' => 23,
                'district' => 'Geita',
                'region_id' => 4,
            ),
            23 => 
            array (
                'id' => 24,
                'district' => 'Mbogwe',
                'region_id' => 4,
            ),
            24 => 
            array (
                'id' => 25,
                'district' => 'Nyang,hwale',
                'region_id' => 4,
            ),
            25 => 
            array (
                'id' => 26,
                'district' => 'Iringa',
                'region_id' => 5,
            ),
            26 => 
            array (
                'id' => 27,
                'district' => 'Iringa Municipal',
                'region_id' => 5,
            ),
            27 => 
            array (
                'id' => 28,
                'district' => 'Kilolo',
                'region_id' => 5,
            ),
            28 => 
            array (
                'id' => 29,
                'district' => 'Mafinga',
                'region_id' => 5,
            ),
            29 => 
            array (
                'id' => 30,
                'district' => 'Mufindi',
                'region_id' => 5,
            ),
            30 => 
            array (
                'id' => 31,
                'district' => 'Biharamulo',
                'region_id' => 6,
            ),
            31 => 
            array (
                'id' => 32,
                'district' => 'Bukoba',
                'region_id' => 6,
            ),
            32 => 
            array (
                'id' => 33,
                'district' => 'Bukoba Municipal',
                'region_id' => 6,
            ),
            33 => 
            array (
                'id' => 34,
                'district' => 'Karagwe',
                'region_id' => 6,
            ),
            34 => 
            array (
                'id' => 35,
                'district' => 'Kyerwa',
                'region_id' => 6,
            ),
            35 => 
            array (
                'id' => 36,
                'district' => 'Missenyi',
                'region_id' => 6,
            ),
            36 => 
            array (
                'id' => 37,
                'district' => 'Muleba',
                'region_id' => 6,
            ),
            37 => 
            array (
                'id' => 38,
                'district' => 'Ngara',
                'region_id' => 6,
            ),
            38 => 
            array (
                'id' => 39,
                'district' => 'Micheweni',
                'region_id' => 7,
            ),
            39 => 
            array (
                'id' => 40,
                'district' => 'Wete',
                'region_id' => 7,
            ),
            40 => 
            array (
                'id' => 41,
                'district' => 'Kaskazini A',
                'region_id' => 8,
            ),
            41 => 
            array (
                'id' => 42,
                'district' => 'Kaskazini B',
                'region_id' => 8,
            ),
            42 => 
            array (
                'id' => 43,
                'district' => 'Mlele',
                'region_id' => 9,
            ),
            43 => 
            array (
                'id' => 44,
                'district' => 'Mpanda',
                'region_id' => 9,
            ),
            44 => 
            array (
                'id' => 45,
                'district' => 'Buhigwe',
                'region_id' => 10,
            ),
            45 => 
            array (
                'id' => 46,
                'district' => 'Kakonko',
                'region_id' => 10,
            ),
            46 => 
            array (
                'id' => 47,
                'district' => 'Kasulu',
                'region_id' => 10,
            ),
            47 => 
            array (
                'id' => 48,
                'district' => 'Kasulu Town',
                'region_id' => 10,
            ),
            48 => 
            array (
                'id' => 49,
                'district' => 'Kibondo',
                'region_id' => 10,
            ),
            49 => 
            array (
                'id' => 50,
                'district' => 'Kigoma-Ujiji',
                'region_id' => 10,
            ),
            50 => 
            array (
                'id' => 51,
                'district' => 'Uvinza',
                'region_id' => 10,
            ),
            51 => 
            array (
                'id' => 52,
                'district' => 'Hai',
                'region_id' => 11,
            ),
            52 => 
            array (
                'id' => 53,
                'district' => 'Moshi',
                'region_id' => 11,
            ),
            53 => 
            array (
                'id' => 54,
                'district' => 'Moshi Municipal',
                'region_id' => 11,
            ),
            54 => 
            array (
                'id' => 55,
                'district' => 'Mwanga',
                'region_id' => 11,
            ),
            55 => 
            array (
                'id' => 56,
                'district' => 'Rombo',
                'region_id' => 11,
            ),
            56 => 
            array (
                'id' => 57,
                'district' => 'Same',
                'region_id' => 11,
            ),
            57 => 
            array (
                'id' => 58,
                'district' => 'Siha',
                'region_id' => 11,
            ),
            58 => 
            array (
                'id' => 59,
                'district' => 'Chake Chake',
                'region_id' => 12,
            ),
            59 => 
            array (
                'id' => 60,
                'district' => 'Mkoani',
                'region_id' => 12,
            ),
            60 => 
            array (
                'id' => 61,
                'district' => 'Kati',
                'region_id' => 13,
            ),
            61 => 
            array (
                'id' => 62,
                'district' => 'Kusini',
                'region_id' => 13,
            ),
            62 => 
            array (
                'id' => 63,
                'district' => 'Kilwa',
                'region_id' => 14,
            ),
            63 => 
            array (
                'id' => 64,
                'district' => 'Lindi',
                'region_id' => 14,
            ),
            64 => 
            array (
                'id' => 65,
                'district' => 'Lindi Municipal',
                'region_id' => 14,
            ),
            65 => 
            array (
                'id' => 66,
                'district' => 'Liwale',
                'region_id' => 14,
            ),
            66 => 
            array (
                'id' => 67,
                'district' => 'Nachingwea',
                'region_id' => 14,
            ),
            67 => 
            array (
                'id' => 68,
                'district' => 'Ruangwa',
                'region_id' => 14,
            ),
            68 => 
            array (
                'id' => 69,
                'district' => 'Babati Town',
                'region_id' => 15,
            ),
            69 => 
            array (
                'id' => 70,
                'district' => 'Babati',
                'region_id' => 15,
            ),
            70 => 
            array (
                'id' => 71,
                'district' => 'Hanang',
                'region_id' => 15,
            ),
            71 => 
            array (
                'id' => 72,
                'district' => 'Kiteto',
                'region_id' => 15,
            ),
            72 => 
            array (
                'id' => 73,
                'district' => 'Mbulu',
                'region_id' => 15,
            ),
            73 => 
            array (
                'id' => 74,
                'district' => 'Simanjiro',
                'region_id' => 15,
            ),
            74 => 
            array (
                'id' => 75,
                'district' => 'Bunda',
                'region_id' => 16,
            ),
            75 => 
            array (
                'id' => 76,
                'district' => 'Butiama',
                'region_id' => 16,
            ),
            76 => 
            array (
                'id' => 77,
                'district' => 'Musoma',
                'region_id' => 16,
            ),
            77 => 
            array (
                'id' => 78,
                'district' => 'Musoma Municipal',
                'region_id' => 16,
            ),
            78 => 
            array (
                'id' => 79,
                'district' => 'Rorya',
                'region_id' => 16,
            ),
            79 => 
            array (
                'id' => 80,
                'district' => 'Serengeti',
                'region_id' => 16,
            ),
            80 => 
            array (
                'id' => 81,
                'district' => 'Tarime',
                'region_id' => 16,
            ),
            81 => 
            array (
                'id' => 82,
                'district' => 'Busokelo',
                'region_id' => 17,
            ),
            82 => 
            array (
                'id' => 83,
                'district' => 'Chunya',
                'region_id' => 17,
            ),
            83 => 
            array (
                'id' => 84,
                'district' => 'Kyela',
                'region_id' => 17,
            ),
            84 => 
            array (
                'id' => 85,
                'district' => 'Mbarali',
                'region_id' => 17,
            ),
            85 => 
            array (
                'id' => 86,
                'district' => 'Mbeya City ',
                'region_id' => 17,
            ),
            86 => 
            array (
                'id' => 87,
                'district' => 'Mbeya',
                'region_id' => 17,
            ),
            87 => 
            array (
                'id' => 88,
                'district' => 'Rungwe',
                'region_id' => 17,
            ),
            88 => 
            array (
                'id' => 89,
                'district' => 'Magharibi',
                'region_id' => 18,
            ),
            89 => 
            array (
                'id' => 90,
                'district' => 'Mjini',
                'region_id' => 18,
            ),
            90 => 
            array (
                'id' => 91,
                'district' => 'Gairo',
                'region_id' => 19,
            ),
            91 => 
            array (
                'id' => 92,
                'district' => 'Kilombero',
                'region_id' => 19,
            ),
            92 => 
            array (
                'id' => 93,
                'district' => 'Kilosa',
                'region_id' => 19,
            ),
            93 => 
            array (
                'id' => 94,
                'district' => 'Morogoro',
                'region_id' => 19,
            ),
            94 => 
            array (
                'id' => 95,
                'district' => 'Morogoro Municipal',
                'region_id' => 19,
            ),
            95 => 
            array (
                'id' => 96,
                'district' => 'Mvomero',
                'region_id' => 19,
            ),
            96 => 
            array (
                'id' => 97,
                'district' => 'Ulanga',
                'region_id' => 19,
            ),
            97 => 
            array (
                'id' => 98,
                'district' => 'Malinyi',
                'region_id' => 19,
            ),
            98 => 
            array (
                'id' => 99,
                'district' => 'Masasi',
                'region_id' => 20,
            ),
            99 => 
            array (
                'id' => 100,
                'district' => 'Masasi Town',
                'region_id' => 20,
            ),
            100 => 
            array (
                'id' => 101,
                'district' => 'Mtwara',
                'region_id' => 20,
            ),
            101 => 
            array (
                'id' => 102,
                'district' => 'Mtwara Municipal',
                'region_id' => 20,
            ),
            102 => 
            array (
                'id' => 103,
                'district' => 'Nanyumbu',
                'region_id' => 20,
            ),
            103 => 
            array (
                'id' => 104,
                'district' => 'Newala',
                'region_id' => 20,
            ),
            104 => 
            array (
                'id' => 105,
                'district' => 'Tandahimba',
                'region_id' => 20,
            ),
            105 => 
            array (
                'id' => 106,
                'district' => 'Ilemela',
                'region_id' => 21,
            ),
            106 => 
            array (
                'id' => 107,
                'district' => 'Kwimba',
                'region_id' => 21,
            ),
            107 => 
            array (
                'id' => 108,
                'district' => 'Magu',
                'region_id' => 21,
            ),
            108 => 
            array (
                'id' => 109,
                'district' => 'Misungwi',
                'region_id' => 21,
            ),
            109 => 
            array (
                'id' => 110,
                'district' => 'Nyamagana',
                'region_id' => 21,
            ),
            110 => 
            array (
                'id' => 111,
                'district' => 'Sengerema',
                'region_id' => 21,
            ),
            111 => 
            array (
                'id' => 112,
                'district' => 'Ukerewe',
                'region_id' => 21,
            ),
            112 => 
            array (
                'id' => 113,
                'district' => 'Ludewa',
                'region_id' => 22,
            ),
            113 => 
            array (
                'id' => 114,
                'district' => 'Makambako',
                'region_id' => 22,
            ),
            114 => 
            array (
                'id' => 115,
                'district' => 'Makete',
                'region_id' => 22,
            ),
            115 => 
            array (
                'id' => 116,
                'district' => 'Njombe',
                'region_id' => 22,
            ),
            116 => 
            array (
                'id' => 117,
                'district' => 'Njombe Town ',
                'region_id' => 22,
            ),
            117 => 
            array (
                'id' => 118,
                'district' => 'Wanginge',
                'region_id' => 22,
            ),
            118 => 
            array (
                'id' => 119,
                'district' => 'Bagamoyo',
                'region_id' => 23,
            ),
            119 => 
            array (
                'id' => 120,
                'district' => 'Kibaha',
                'region_id' => 23,
            ),
            120 => 
            array (
                'id' => 121,
                'district' => 'Kibaha Town',
                'region_id' => 23,
            ),
            121 => 
            array (
                'id' => 122,
                'district' => 'Kisarawe',
                'region_id' => 23,
            ),
            122 => 
            array (
                'id' => 123,
                'district' => 'Mafia',
                'region_id' => 23,
            ),
            123 => 
            array (
                'id' => 124,
                'district' => 'Mkuranga',
                'region_id' => 23,
            ),
            124 => 
            array (
                'id' => 125,
                'district' => 'Rufiji',
                'region_id' => 23,
            ),
            125 => 
            array (
                'id' => 126,
                'district' => 'Kalambo',
                'region_id' => 24,
            ),
            126 => 
            array (
                'id' => 127,
                'district' => 'Nkasi',
                'region_id' => 24,
            ),
            127 => 
            array (
                'id' => 128,
                'district' => 'Sumbawanga',
                'region_id' => 24,
            ),
            128 => 
            array (
                'id' => 129,
                'district' => 'Sumbawanga Municipal',
                'region_id' => 24,
            ),
            129 => 
            array (
                'id' => 130,
                'district' => 'Mbinga',
                'region_id' => 25,
            ),
            130 => 
            array (
                'id' => 131,
                'district' => 'Songea',
                'region_id' => 25,
            ),
            131 => 
            array (
                'id' => 132,
                'district' => 'Songea Municipal',
                'region_id' => 25,
            ),
            132 => 
            array (
                'id' => 133,
                'district' => 'Tunduru',
                'region_id' => 25,
            ),
            133 => 
            array (
                'id' => 134,
                'district' => 'Namtumbo',
                'region_id' => 25,
            ),
            134 => 
            array (
                'id' => 135,
                'district' => 'Nyasa',
                'region_id' => 25,
            ),
            135 => 
            array (
                'id' => 136,
                'district' => 'Kahama Town',
                'region_id' => 26,
            ),
            136 => 
            array (
                'id' => 137,
                'district' => 'Kahama',
                'region_id' => 26,
            ),
            137 => 
            array (
                'id' => 138,
                'district' => 'Kishapu',
                'region_id' => 26,
            ),
            138 => 
            array (
                'id' => 139,
                'district' => 'Shinyanga',
                'region_id' => 26,
            ),
            139 => 
            array (
                'id' => 140,
                'district' => 'Shinyanga Municipal',
                'region_id' => 26,
            ),
            140 => 
            array (
                'id' => 141,
                'district' => 'Bariadi',
                'region_id' => 27,
            ),
            141 => 
            array (
                'id' => 142,
                'district' => 'Busega',
                'region_id' => 27,
            ),
            142 => 
            array (
                'id' => 143,
                'district' => 'Itilima',
                'region_id' => 27,
            ),
            143 => 
            array (
                'id' => 144,
                'district' => 'Maswa',
                'region_id' => 27,
            ),
            144 => 
            array (
                'id' => 145,
                'district' => 'Meatu',
                'region_id' => 27,
            ),
            145 => 
            array (
                'id' => 146,
                'district' => 'Ikungi',
                'region_id' => 28,
            ),
            146 => 
            array (
                'id' => 147,
                'district' => 'Iramba',
                'region_id' => 28,
            ),
            147 => 
            array (
                'id' => 148,
                'district' => 'Manyoni',
                'region_id' => 28,
            ),
            148 => 
            array (
                'id' => 149,
                'district' => 'Mkalama',
                'region_id' => 28,
            ),
            149 => 
            array (
                'id' => 150,
                'district' => 'Singida',
                'region_id' => 28,
            ),
            150 => 
            array (
                'id' => 151,
                'district' => 'Singida Municipal',
                'region_id' => 28,
            ),
            151 => 
            array (
                'id' => 152,
                'district' => 'Igunga',
                'region_id' => 29,
            ),
            152 => 
            array (
                'id' => 153,
                'district' => 'Kaliua',
                'region_id' => 29,
            ),
            153 => 
            array (
                'id' => 154,
                'district' => 'Nzega',
                'region_id' => 29,
            ),
            154 => 
            array (
                'id' => 155,
                'district' => 'Sikonge',
                'region_id' => 29,
            ),
            155 => 
            array (
                'id' => 156,
                'district' => 'Tabora Municipal ',
                'region_id' => 29,
            ),
            156 => 
            array (
                'id' => 157,
                'district' => 'Urambo',
                'region_id' => 29,
            ),
            157 => 
            array (
                'id' => 158,
                'district' => 'Uyui',
                'region_id' => 29,
            ),
            158 => 
            array (
                'id' => 159,
                'district' => 'Handeni',
                'region_id' => 30,
            ),
            159 => 
            array (
                'id' => 160,
                'district' => 'Handeni Town',
                'region_id' => 30,
            ),
            160 => 
            array (
                'id' => 161,
                'district' => 'Kilindi',
                'region_id' => 30,
            ),
            161 => 
            array (
                'id' => 162,
                'district' => 'Korogwe Town',
                'region_id' => 30,
            ),
            162 => 
            array (
                'id' => 163,
                'district' => 'Korogwe',
                'region_id' => 30,
            ),
            163 => 
            array (
                'id' => 164,
                'district' => 'Lushoto',
                'region_id' => 30,
            ),
            164 => 
            array (
                'id' => 165,
                'district' => 'Muheza',
                'region_id' => 30,
            ),
            165 => 
            array (
                'id' => 166,
                'district' => 'Mkinga',
                'region_id' => 30,
            ),
            166 => 
            array (
                'id' => 167,
                'district' => 'Pangani',
                'region_id' => 30,
            ),
            167 => 
            array (
                'id' => 168,
                'district' => 'Tanga City',
                'region_id' => 30,
            ),
            168 => 
            array (
                'id' => 169,
                'district' => 'Bumbuli',
                'region_id' => 30,
            ),
        ));
        
        
    }
}