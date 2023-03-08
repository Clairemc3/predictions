<?php

namespace Database\Factories;

use App\Models\Season;
use App\Models\Section;
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


    // /**
    //  * Create with sections/groups/questions
    //  */
    // public function withQuestions(): Factory
    // {
    //     return $this->afterCreating(function (Season $season) {
    //         $season->hasSections();
    //     });
    // }


}
