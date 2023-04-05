<?php

namespace Database\Seeders;


use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Generates a season with users and predictions
 */
class PlayersWithPredictionsSeeder extends Seeder
{

    use WithoutModelEvents;

    /**
     * Generates an open season with players
     */
    public function run(): void
    {

        // Create an open season with questions
        $season = Season::factory()->createOpenSeasonWithQuestions();


        /*
        |--------------------------------------------------------------------------
        | Create users with set email addresses for the season
        |--------------------------------------------------------------------------
        | These can be logged in as (all passwords are 'password')
        |
        */

        $userEmails = [
                'player1@example.org',
                'player2@example.org',
                'player3@example.org',
            ];

        foreach ($userEmails as $email) {
            Season::factory()
            ->createUserWithPredictions($season, $email);
        }

        /*
        |--------------------------------------------------------------------------
        | Create more users for the season with randomly generated credentials
        |--------------------------------------------------------------------------
        |
        */

        Season::factory()
        ->createUsersWithPredictions($season, 10);

    }
}
