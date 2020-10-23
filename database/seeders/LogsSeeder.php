<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Logs::class, 20)->create();
        foreach (range(1, 100) as $index) {
    		DB::table('logs')->insert([
    			'instance' => str_random(20),
    			'identity' => str_random(20),
    			'date' => dateTimeBetween('-6 month', '+1 month')
    		]);
		}
	}
}