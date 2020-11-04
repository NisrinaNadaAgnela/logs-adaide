<?php

namespace Database\Seeders;

use App\Models\Logs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $index = factory(\App\Models\Logs::class, 30)->create();

    	Logs::factory()->count(30)->create();
    }
}
