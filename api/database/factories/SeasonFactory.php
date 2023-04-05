<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Season;
use App\Models\Section;
use App\Models\User;
use App\Models\Predictions;
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
     * The season is open
     */
    public function open(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'open',
            ];
        });
    }


    /**
     * Create a user with a 'complete' Predictions
     */
    public function withCompletePredictions(User $user): static
    {
        return $this->afterMaking(function (Season $season) {
            // ...
        })->afterCreating(function (Season $season) use ($user) {
            $season->users()->attach($user, ['complete' => true]);
        });
    }


    /**
     * Populate a user season with predictions
     */
    public function createUsersWithPredictions(int $userCount, Season $season)
    {

        // Create users for the predictions
        User::factory()
            ->count($userCount)
            ->hasAttached($season)
            ->create();

        // Foreach question in the season generate answers
        foreach ($season->users as $user) {
            foreach ($season->questions as $question) {
                Answer::factory()
                ->count($question->number_answers)
                ->create([
                        'user_season_id' => $user->predictions->id,
                        'question_id' => $question->id
                ]);
            }

        }

    }


}
