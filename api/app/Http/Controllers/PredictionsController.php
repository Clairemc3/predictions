<?php

namespace App\Http\Controllers;

use App\Http\Resources\PredictionsResource;
use App\Models\Season;
use App\Models\User;
use App\Models\Predictions;
use App\Services\PredictionsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PredictionsController extends Controller
{

    /**
     * Returns the auther users predictions for the current
     *
     * @return JsonResponse
     */
    public function show(PredictionsService $predictionsService)
    {
        $predictions = $predictionsService->getForActiveSeason(Auth::user());

        return new PredictionsResource($predictions);
    }
}
