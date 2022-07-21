<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('students')->delete();
        
        \DB::table('students')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 5,
                'course_id' => 3,
                'faculty_id' => 2,
                'username' => 'IMC/BIT/1912158',
                'fullname' => 'Alphaxad Jamry Omary',
                'phone' => '0743196588',
                'email' => 'alphaxad@gmail.com',
                'year' => '2',
                'level' => 'Degree',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 6,
                'course_id' => 1,
                'faculty_id' => 1,
                'username' => 'IMC/BAIT/12345',
                'fullname' => 'Abdully Goodlucky Jamar',
                'phone' => '0743196588',
                'email' => 'goodluck@gmail.com',
                'year' => '1',
                'level' => 'Degree',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 8,
                'course_id' => 1,
                'faculty_id' => 1,
                'username' => 'IMC/ODBF/4545',
                'fullname' => 'Annet Colman Omary',
                'phone' => '0765431976',
                'email' => 'annet@gmail.com',
                'year' => '1',
                'level' => 'Diploma',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 7,
                'course_id' => 3,
                'faculty_id' => 2,
                'username' => 'IMC/ODCS/1515',
                'fullname' => 'Goodluck Omary Abdul',
                'phone' => '0743196518',
                'email' => 'ommy@gmail.com',
                'year' => '1',
                'level' => 'Diploma',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}