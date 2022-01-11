<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company(),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->company(),
            'people' => $this->faker->numberBetween(0,10),
            'date' => $this->faker->date('Y_m_d'),
            'time' => $this->faker->time(),
            'user_id' => User::all()->random(),
            'showSlider' => false,
        ];
    }
}
