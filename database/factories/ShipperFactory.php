<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipper>
 */
class ShipperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shipper_code' => $this->faker->unique()->bothify('SH##??'),
            'shipper_name' => $this->faker->company,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'fax' => $this->faker->phoneNumber,
            'tax_code' => $this->faker->numerify('##########'),
            'storage_fee' => $this->faker->randomFloat(2, 100, 1000),
            'bank_account' => $this->faker->bankAccountNumber,
            'bank_name' => $this->faker->company,
            'bank_address' => $this->faker->address,
            'id_number' => $this->faker->numerify('##########'),
            'tax_percent' => $this->faker->numberBetween(0, 10),
            'debt_balance' => $this->faker->randomFloat(2, 0, 10000),
        ];
    }
}
