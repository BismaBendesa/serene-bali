<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'facility_name' => $faker->randomElement(['building area', 'land area', 'bedrooms', 'living room', 'dining room', 'kitchen', 'garage', 'pool', 'extra room', 'shower', 'big yard', 'balcony', 'ac', 'tv', 'sofa', 'kitchen set', 'furniture', 'wifi', 'cupboard']),
        ];
    }
}
