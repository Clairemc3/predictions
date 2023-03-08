<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Group;
use App\Models\Question;
use App\Models\Section;
use App\Models\UserSeason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayersWithPredictionsSeeder extends Seeder
{

    use WithoutModelEvents;

    /**
     * Generates a set of players with answers for a season
     */
    public function run(): void
    {

       // Create a season with questions
       $season = \App\Models\Season::factory()
            ->has(
                Section::factory(4)
                    ->has(Group::factory(2)
                        ->has(Question::factory(5)
                        )
                    )
                )->create();


        // Create some players
        $users = \App\Models\User::factory(10)->create();


        // @TODO Create a UserSeason
        // @TODO Populate the answers


    }
}
