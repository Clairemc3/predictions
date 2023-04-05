<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Predictions extends Pivot
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_season';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;


    /**
     * The season
     */
    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class);
    }
}
