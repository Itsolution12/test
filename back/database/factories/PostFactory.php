<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PostFactory extends Factory
{

    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        $factory->define(App\Post::class, function (Faker $faker) {
        return [
            'title' => $faker->sentence(3, true),
            'content' => $faker->realText($faker->numberBetween(10, 100))
        ];
        
    });
    }
}