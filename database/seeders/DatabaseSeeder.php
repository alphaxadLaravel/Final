<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        
        $this->call(RegionsTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(WardsTableSeeder::class);
        $this->call(BrellahsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(FacultiesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(HODSTableSeeder::class);
        $this->call(SupervisorsTableSeeder::class);
    }
}
