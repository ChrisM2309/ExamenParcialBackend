<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Integer;
use Illuminate\Support\Boolean;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->Str::random(15), 
            'isbn' => fake()->Str::random(9),
            'total_copies' => fake()->Integer::random(),
            'available_copies' => 'total_copies',
            'status' => fake()->Boolean::random()
        ];
    }
}
