<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserSeasonResource;
use App\Models\Season;
use App\Models\UserSeason;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSeasonController extends Controller
{

    public function show() {

        // Get the current open season
        $activeSeason = Season::active();

        $userSeason = UserSeason::where('user_id', Auth::user()->id)
            ->where('season_id', $activeSeason->id )->first();

        return new UserSeasonResource($userSeason);
    }
}
