<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = rand(1,count(User::all()));
        return [
            'title' => $this->faker->word(),
            'content' => $this->faker->text(1000),
            'user_id' => $id,
        ];
    }
}
