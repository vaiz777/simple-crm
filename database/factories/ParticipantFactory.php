<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname'     => $this->faker->firstName(gender: null),
            'lastname'      => $this->faker->lastName(),
            'email'         => $this->faker->email(),
            'skype'         => $this->faker->url(),
            'linkedin'      => $this->faker->url(),
            'phone'         => $this->faker->phoneNumber(),
            'status'        => $this->faker->randomElement($array = ['first', 'second', 'third', 'fourth']),
            'employee_id'   => rand(1, 10),
        ];
    }
}
