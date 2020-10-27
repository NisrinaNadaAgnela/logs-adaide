<?php

namespace Database\Factories;

use App\Models\Logs;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

$factory->define(Logs::class, function(Faker $faker) {
    return [
        'instance' => $faker->words,
        'identity' => $faker->words,
        'state' => $faker->state,
        'date' => $faker->dateTimeBetween('-6 month', '+1 month')
    ];
});


class LogsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Logs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'instance' => $this->faker->words,
            // 'identity' => $this->faker->words,
            // 'state' => $this->faker->state,
            // 'date' => $this->faker->dateTimeBetween('-6 month', '+1 month'),
        ];
    }
}
