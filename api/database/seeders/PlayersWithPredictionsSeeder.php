<?php

namespace Database\Seeders;


use App\Models\Group;
use App\Models\Question;
use App\Models\Season;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Generates a season with users and predictions
 */
class PlayersWithPredictionsSeeder extends Seeder
{

    use WithoutModelEvents;

    /**
     * Generates a season with users and predictions
     */
    public function run(): void
    {

       // Create a Season with questions
       $season = Season::factory()
            ->has(
                Section::factory(4)
                    ->has(Group::factory(2)
                        ->has(Question::factory(3)
                        )
                    )
                )->create();


        // Create users with predictions for the Season
        Season::factory()
            ->createUsersWithPredictions(10, $season);


    }
}
