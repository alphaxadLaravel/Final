<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HODSTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('h_o_d_s')->delete();
        
        \DB::table('h_o_d_s')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'faculty_id' => 1,
                'username' => 'PF1234',
                'fullname' => 'Masamila James Mushi',
                'phone' => '0743196578',
                'email' => 'masamila@gmail.com',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'faculty_id' => 2,
                'username' => 'PF555',
                'fullname' => 'Dr Msury Mahunnah',
                'phone' => '0725172346',
                'email' => 'mahunnah@gmail.com',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}