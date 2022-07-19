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

        \App\Models\Brellah::factory()->create([
            'company' => 'test@example.com',
            'regNumber' => 'BRH1234',
            'about' => 'this company deals with innovation and Technology',
            'email' => 'company@gmail.com',
            'phone' => '0743196599',
            'region_id' => '1',
            'district_id' => '1',
            'ward_id' => '1',
        ]);
    }
}
