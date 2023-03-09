<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\User;
use App\Models\UserSeason;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answers>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_season_id' => User::factory()->hasAttached('season'),
            'question_id' => Question::factory(),
            'order' => 1,
            'score' => 0
        ];
    }
}
