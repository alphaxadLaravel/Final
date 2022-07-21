<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'PF1234',
                'password' => '1234',
                'role' => 'hod',
                'status' => 'geust',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'PF555',
                'password' => '1234',
                'role' => 'hod',
                'status' => 'geust',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'PF666',
                'password' => '1234',
                'role' => 'supervisor',
                'status' => 'geust',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'PF1212',
                'password' => '1234',
                'role' => 'supervisor',
                'status' => 'geust',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'username' => 'IMC/BIT/1912158',
                'password' => '1234',
                'role' => 'student',
                'status' => 'geust',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'username' => 'IMC/BAIT/12345',
                'password' => '1234',
                'role' => 'student',
                'status' => 'geust',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'username' => 'IMC/ODCS/1515',
                'password' => '1234',
                'role' => 'student',
                'status' => 'geust',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'username' => 'IMC/ODBF/4545',
                'password' => '1234',
                'role' => 'student',
                'status' => 'geust',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}