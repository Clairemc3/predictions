<?php

namespace App\Services;

use App\Exceptions\PredictionsNotFoundException;
use App\Exceptions\SeasonNotFoundException;
use App\Exceptions\UserSeasonNotFoundException;
use App\Models\Predictions;
use App\Models\Season;
use App\Models\User;
use App\Models\UserSeason;

class PredictionsService {


    /**
     * Get the UserSeason for the (only) Active
     * Season for the user
     *
     * @param User $user
     * @return UserSeason
     * @throws SeasonNotFoundException
     * @throws UserSeasonNotFoundException
     */
    public function getForActiveSeason(User $user) :Predictions
    {
        // Get the current active season
        $activeSeason = Season::active();

        if (!$activeSeason) {
            throw new SeasonNotFoundException('There is no active Season');
        }

        // Find the first (only) UserSeason for the User
        $userSeason = Predictions::where('user_id', $user->id)
        ->where('season_id', $activeSeason->id)->first();

        $userSeason = Predictions::where('user_id', $user->id)->first();

        // dump($activeSeason->id);

        // dd($userSeason );

        if (!$userSeason) {
            throw new PredictionsNotFoundException();
        }

        return $userSeason;

    }

}
