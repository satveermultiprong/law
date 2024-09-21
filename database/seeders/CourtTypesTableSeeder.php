<?php

// database/seeders/CourtTypesTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourtTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('court_types')->insert([
            ['name' => 'Supreme Court'],
            ['name' => 'High Court'],
            ['name' => 'District Court'],
            ['name' => 'Family Court'],
            ['name' => 'Labour Court'],
        ]);
    }
}
