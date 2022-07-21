<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupervisorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('supervisors')->delete();
        
        \DB::table('supervisors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 4,
                'faculty_id' => 1,
                'username' => 'PF1212',
                'fullname' => 'Raphael Jackson Mwachaka',
                'phone' => '0743196574',
                'email' => 'raphael@gmail.com',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'faculty_id' => 2,
                'username' => 'PF666',
                'fullname' => 'Jabil Dennis Nko',
                'phone' => '0743196586',
                'email' => 'nko@gmail.com',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}