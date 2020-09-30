<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Students::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18,25),
            'gender' => $this->faker->numberBetween(0,2),
            'address' => $this->faker->address,
            'class' => $this->faker->name,
             'is_active' => $this->faker->numberBetween(0,1),
        ];
    }
}
