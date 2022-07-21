<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'faculty_id' => 1,
                'course' => 'Bachelor of Accounting ',
                'inshort' => 'B.Acc',
                'status' => 'Degree',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'faculty_id' => 1,
                'course' => 'Ordinary Diploma in Banking and Finace',
                'inshort' => 'ODBF',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'faculty_id' => 2,
                'course' => 'Bachelor of Science in Information Technology',
                'inshort' => 'BIT',
                'status' => 'Degree',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'faculty_id' => 2,
                'course' => 'Ordinary Diploma in Computer Science ',
                'inshort' => 'ODCS',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}