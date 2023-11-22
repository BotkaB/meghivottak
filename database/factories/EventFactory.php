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
    public function definition(): array
    {
        return [
             
            'date' => fake()->dateTime(),
            'location' => fake('hu_HU')->Address(),
            'org_id' => Organisator::all()->random()->id,
      
        ];
    }
}
