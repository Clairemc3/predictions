<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['standing', 'multiselect', 'singleselect'];
        $typeKey = array_rand($types, 1);
        $type = $types[$typeKey];
        return [
            'type' =>  $type,
            'label' => $this->faker->sentence(3),
            'short_label' => $this->faker->word(3),
            'number_answers' => $this->faker->numberBetween(1, 3)
        ];
    }
}
