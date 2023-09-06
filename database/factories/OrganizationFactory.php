<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organizations>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->randomNumber(4, true),
            'name' => $this->faker->company(),
            'group_id' => mt_rand(1, 9),
            'type_id' => mt_rand(1, 9),
            'class' => $this->faker->word(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'province_id' => mt_rand(1, 9),
            'regency_id' => mt_rand(1, 9),
            'district_id' => mt_rand(1, 9),
            'village_id' => mt_rand(1, 9),
            'created_by' => 1,
            // 'created_at' => now(),
            // 'updated_at' => now()
        ];
    }
}
