<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
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
            'date' => Carbon::createFromTimestamp($this->faker->dateTimeBetween('now','+1 year')->getTimestamp()),
            // 'time' => $this->faker->time(),
            'user_id' => User::all()->random(),
            'showSlider' => false,
        ];
    }
}
