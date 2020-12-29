<?php

namespace Database\Factories;

use App\Models\Cd;
use Illuminate\Database\Eloquent\Factories\Factory;

class CdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cd::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->city ,
            'fname' => $this->faker->firstName($gender = null|'male'|'female'),
            'sname' => $this->faker->lastName,
            'play_length' => $this->faker->numberBetween($min = 50, $max = 400),
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
        ];
    }
}
