<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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

    // public function run() {
    // 	$this->call(LogsSeeder::class);
    // }

    // public function run()
    // {
    // 	$faker = Faker::create();
    // 	foreach (range(1, 100) as $index) {
    // 		DB::table('users')->insert([
    // 			'name' => $faker->name,
    // 			'email' => $faker->unique()->safeEmail,
    // 			'password' => encrypt('password'),
    // 			'created_at' => $faker->dateTimeBetween('-6 month', '+1 month')
    // 		]);
    // 	}

    // public function run()
    // {
    // 	$faker = Faker::create();
    // 	foreach (range(1, 100) as $index) {
    // 		DB::table('logs')->insert([
    // 			'instance' => $faker->str_random(20),
    // 			'identity' => $faker->str_random(20),
    // 			'date' => $faker->dateTimeBetween('-6 month', '+1 month')
    // 		]);
    // 	}
    // }

    // public function run() {
    //      \App\Models\Logs::factory(20)->create([
    //      	'instance' => str_random(20),
    //      	'identity' => str_random(20),
    //      	'date' => dateTimeBetween('-6 month', '+1 month')
    //      ]);
    // }
    
}
