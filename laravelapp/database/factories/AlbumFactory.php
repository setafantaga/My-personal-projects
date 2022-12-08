<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Album_id' => Album::factory(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'excerpt' => '<p>' . implode('</p><p>', $this->faker->paragraphs(2))  . '</p>',
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6))  . '</p>',
        ];
    }
}
