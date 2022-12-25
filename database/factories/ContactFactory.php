<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'fullname' => $this->faker->name(),
        'gender' => rand(1, 2),
        'email' =>$this->faker->safeEmail,
        'postcode' => $this->faker->postcode,
        'address' => $this->faker->address,
        'building_name' => $this->faker->city,
        'opinion' => $this->faker->text(120),
        'created_at' => $this->faker->date(),
    ];
    }
}
