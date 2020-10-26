<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
        $faker = Faker::create();
    	foreach(range(1, 100) as $indeks) {
    		DB::table('logs')->insert([
    			'instance' => $faker->words,
    			'identity' => $faker->words,
    			'state' => $faker->state,
    			'date' => $faker->dateTimeBetween('-6 month', '+1 month')
    		]);
    	}
	}
}