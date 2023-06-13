<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->sentence(),
            'description' =>$this->faker->paragraph(10),
            'topics' =>$this->faker->sentence(),
            'course content' =>$this->faker->paragraph(5),
            'course_started' =>$this->faker->date("Y-m-d H:i:s"),
            'duration' =>$this->faker->sentence(),
            'level' =>$this->faker->sentence(),
            'price' =>$this->faker->randomDigit,
   

    
            //
        ];
    }
}
