<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// Laravel's faker does not have a native ulid() method in all versions.
// Use Str::ulid() if available, otherwise fallback to uniqid() or a random string.
// We'll alias Str here for use in the factory.

use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Routes>
 */
class RoutesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'                     => $this->faker->unique()->uuid(),
            'route_name'              => $this->faker->streetName(),
            'distance_km'             => $this->faker->numberBetween(10, 500),
            'diesel_start_equalizer'  => $this->faker->boolean ? $this->faker->numberBetween(1, 10) : null,
            'maxforce_oil'            => $this->faker->randomNumber(2, true),
            'maxforce_oil_kep'        => $this->faker->randomNumber(2, true),
            'maxforce_oil_t678'       => $this->faker->randomNumber(2, true),
            'ticket_price'            => $this->faker->randomFloat(2, 10, 500),
            'road_fee'                => $this->faker->randomFloat(2, 5, 200),
        ];
    }
}
