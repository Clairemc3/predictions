<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Season;
use App\Models\Section;
use App\Models\UserSeason;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Season>
 */
class SeasonFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->year,
            'status' => 'open'
        ];
    }


    /**
     * Populate a user season with predictions
     */
    public function generatePredictions(UserSeason $userSeason)
    {
        // Foreach question in the season generate answers
        foreach ($userSeason->season->questions as $question) {
            Answer::factory()->count($question->number_answers)
                ->create([
                    'user_season_id' => $userSeason->id,
                    'question_id' => $question->id
                    ]);
                }

    }


}
