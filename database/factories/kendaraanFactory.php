<?php

namespace Database\Factories;

use App\Models\kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<kendaraan>
 */
class kendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plat_nomor'=> fake()->unique()-randomElement([
                '24MN',
                '15MN',
            ]),

            'merek' => fake()->randomElement([
                'vario',
                'pcx',
                'beat',
            ]),

            'jenis' => fake()->randomElement([
                'metik',
                'kopling',
            ]),
        ];
    }
}
