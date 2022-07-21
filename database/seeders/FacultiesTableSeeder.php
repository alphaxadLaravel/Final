<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faculties')->delete();
        
        \DB::table('faculties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'faculty' => 'Accounting Banking & Finance',
                'inshort' => 'FABF',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'faculty' => 'Computing, information System & mathemetics',
                'inshort' => 'FCIM',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}