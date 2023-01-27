<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Termek;

class TermekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Termek::truncate();
        
        Termek::factory()->count(100)->create();
    }
}
