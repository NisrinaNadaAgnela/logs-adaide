<?php

namespace Database\Seeders;

use App\Models\Logs;
use Illuminate\Database\Seeder;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $index = factory(\App\Models\Logs::class, 30)->create();
    }
}
