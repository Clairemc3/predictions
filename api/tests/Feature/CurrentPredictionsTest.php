<?php

namespace Tests\Feature;

use App\Models\Season;
use App\Models\User;
use Database\Factories\SeasonFactory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CurrentPredictionsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_returns_current_predictions_for_the_authed_user(): void
    {
        // Given have a player
        $user = User::factory()->create();

        // Given the player has complete predictions for an open season
        Season::factory()->open()->withCompletePredictions($user)->create();

        // Given the player is authed
        $this->actingAs($user);


        // When i access the 'current-predictions' route
        $response = $this->get('/api/current-predictions');

        $response->assertStatus(200);

        // Then the users predictions for the open season should be returned
    }

    /**
     */
    public function it_returns_404_when_the_user_has_no_predictions_for_the_authed_user(): void
    {
        // Given have an open/started season

        // Given have an authed 'player' user

        // Given the authed player has no 'complete' predictions

        // When i access the 'current-predicions' route

        // Then a 404 should be returned
    }

    /**
     */
    public function it_returns_404_when_there_is_no_open_season(): void
    {
        // Given no 'open' season

        // Given have an authed 'player' user

        // When i access the 'current-predictions' route

        // Then a 404 should be returned
    }

}
