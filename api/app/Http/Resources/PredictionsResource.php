<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PredictionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Load relations
        $this->resource->load('season.sections.groups.questions');

        $season = $this->season;

        return [
            'name' => $this->season->name,
            'sections' => $season->sections


        ];
    }
}
