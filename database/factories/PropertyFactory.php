<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use app\models\PropertyType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
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
            'property_name' => $faker->country(),
            'property_service' => $faker->randomElement(['freehold', 'leasehold']),
            'fk_property_type_id' => PropertyType::inRandomOrder()->value('id'), // Random existing ID,
            'description' => $faker->paragraph(),
            'land_area' => $faker->randomDigit([1000, 5000]),
            'building_area' => $faker->randomDigit([1000, 5000]),
            'max_pax' => $faker->randomDigit(),
            'location' => $faker->city() . ', ' . $faker->state(),
            'address' => $faker->address(),
            'address_link' => $faker->address(),
            'property_status' => $faker->randomElement(['on_sale', 'waiting_for_payment', 'payment_successfull', 'admin_verification', 'done']),
            'activation_status' => $faker->boolean(),
            'view_count' => 0,
            'price' => $faker->randomNumber(),
            'ambience' => $faker->randomElement(['Beach & Chill', 'Nature & Quiet', 'Summer Vibes', 'Far From Town']),
        ];
    }
}
