<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->name(),
            'dob'       => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'address'   => $this->faker->address(),
            'gender'    => $this->faker->randomElement($array = array('male', 'female')),
            'phone'     => $this->faker->phoneNumber(),
            'email'     => $this->faker->email()
        ];
    }
}
