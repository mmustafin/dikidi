<?php

namespace Database\Factories;

use App\Models\TypeOfBike;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bike>
 */
class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type_of_bike_id' => TypeOfBike::query()->inRandomOrder()->value('id'),
            'discontinued' => $this->faker->boolean(),
        ];
    }
}
