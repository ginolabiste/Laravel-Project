<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Student::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->word(),
            'middle_name' => $this->faker->word(),
            'last_name' => $this->faker->word()
        ];
    }
}
