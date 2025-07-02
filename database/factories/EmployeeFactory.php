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
    public function definition(): array
    {
        return [
            //
            'employee_name' => $this->faker->name(),
            'birth_date' => $this->faker->date(),
            'citizen_id' => $this->faker->numerify('###############'),
            'address' => $this->faker->address(),
            'phone_number' => substr($this->faker->phoneNumber(), 0, 15),
            'employee_type' => $this->faker->randomElement(['Permanent', 'Contract']),
            'department' => $this->faker->randomElement(['HR', 'Sales', 'Tech']),
            'basic_salary' => $this->faker->randomFloat(2, 500, 5000),
            'note' => $this->faker->optional()->sentence(),
            'position_id' => \App\Models\Position::inRandomOrder()->first()?->position_id ?? 1,
            'resigned' => $this->faker->boolean(20),
        ];
    }
}
