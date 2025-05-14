<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisBarang>
 */
class JenisBarangFactory extends Factory
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
            'jns_brg_kode' => "K" .sprintf('%04d', fake()->unique()->numberBetween(1,9999)),
            'jns_brg_nama' => fake()->randomElement(['Minyak','Mie','Bumbu','Minuman'])
        ];
    }
}
