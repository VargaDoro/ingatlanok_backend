<?php

namespace Database\Factories;

use Brick\Math\BigInteger;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\Scalar\String_;
use Psy\Util\Str;
use Ramsey\Uuid\Type\Integer;

use function Symfony\Component\Clock\now;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingatlanok>
 */
class IngatlanokFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        ];
    }
}
