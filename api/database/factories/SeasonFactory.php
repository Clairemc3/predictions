<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Group;
use App\Models\Question;
use App\Models\Season;
use App\Models\Section;
use App\Models\User;
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
    public function createUsersWithPredictions(Season $season, int $userCount)
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


    /**
     * Create a user and popualate predictions
     */
    public function createUserWithPredictions(Season $season, string $email)
    {
        // Create users for the predictions
        $user = User::factory()->withCredentials($email, 'password')
            ->hasAttached($season)
            ->create();

        // Foreach question in the season generate answers
        foreach ($season->questions as $question) {
            Answer::factory()
            ->count($question->number_answers)
            ->create([
                    'user_season_id' => $user->seasons()->first()->id,
                    'question_id' => $question->id
            ]);
        }

    }



    /**
     * Populate a user season sections, groups and questions
     */
    public function createOpenSeasonWithQuestions() : Season
    {
         // Create a Season with questions
        $season = Season::factory(['status' => 'open'])
        ->has(
            Section::factory(4)
                ->has(Group::factory(2)
                    ->has(Question::factory(3)
                    )
                )
            )->create();

        return $season;

    }


}
