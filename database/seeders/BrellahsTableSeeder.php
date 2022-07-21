<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrellahsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brellahs')->delete();
        
        \DB::table('brellahs')->insert(array (
            0 => 
            array (
                'id' => 1,
            'company' => 'Tanzania Railway Authority (TRA)',
                'regNumber' => 'BRH1234',
                'about' => 'Government agency fro  taxation',
                'email' => 'tratz@gmail.com',
                'phone' => '0743196543',
                'region_id' => 1,
                'district_id' => 2,
                'ward_id' => 1,
                'status' => 'active',
            ),
            1 => 
            array (
                'id' => 2,
                'company' => 'UBX Tanzania Ltd',
                'regNumber' => 'BRH5555',
                'about' => 'Innovation Company',
                'email' => 'ubx@gmail.com',
                'phone' => '0765431976',
                'region_id' => 1,
                'district_id' => 2,
                'ward_id' => 1,
                'status' => '',
            ),
        ));
        
        
    }
}