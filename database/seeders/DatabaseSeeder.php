<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Property;
use App\models\PropertyType;
use App\Models\Facility;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // create default admin
        User::factory()->admin()->create();

        // create 4 property types
        PropertyType::factory(4)->create();

        // create 10 properties
        $properties = Property::factory(10)->create();

        $facilities = Facility::factory(10)->create();

        // attach facilities to properties
        $properties->each(function ($property) use ($facilities) {
            $property->facilities()->attach(
                $facilities->random(rand(1, 8))->pluck('id')->toArray(),    //randomly attach 1 to 3 facilities 
                [
                    'amount' => rand(1, 5),
                    'detail' => fake()->sentence(),
                ]
            );
        });
        // $this->call(DatabaseSeeder::class);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
