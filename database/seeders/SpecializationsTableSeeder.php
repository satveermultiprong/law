<?php

// database/seeders/SpecializationsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->insert([
            ['name' => 'Criminal Law'],
            ['name' => 'Family Law'],
            ['name' => 'Corporate Law'],
            ['name' => 'Tax Law'],
            ['name' => 'Civil Rights Law'],
        ]);
    }
}

