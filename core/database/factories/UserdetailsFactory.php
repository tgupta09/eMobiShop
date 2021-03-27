<?php

namespace Database\Factories;

use App\Models\Userdetails;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;


class UserdetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Userdetails::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $faker = Factory::create();

        return [
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('123456789'),
            'github_id' => $this->faker->name,
            'gmail_id' => $this->faker->name,
            'avatar' => $this->faker->url,
        ];
    }
}
