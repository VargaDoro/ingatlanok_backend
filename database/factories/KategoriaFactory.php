<?php

namespace Database\Factories;

use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kategoria>
 */
class KategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'id'=>BigInteger(),
            'kategoria_nev' => enum(),

        ];
    }
}
