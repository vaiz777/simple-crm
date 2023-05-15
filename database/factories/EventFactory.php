<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'date'          => $this->faker->date(format: 'Y-m-d', max: 'now'),
            'descriptions'  => $this->faker->text($maxNbChars = 200),
            'attendants'    => rand(1, 99)
        ];
    }
}
