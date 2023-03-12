<?php

namespace Database\Seeders;


use App\Models\Group;
use App\Models\Question;
use App\Models\Season;
use App\Models\Section;
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
                        ->has(Question::factory(3)
                        )
                    )
                )->create();


        Season::factory()
            ->createUsersWithPredictionsForUser(10, $season);




    }
}
