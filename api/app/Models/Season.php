<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Season extends Model
{
    use HasFactory;
    use HasRelationships;


     /**
     * The seasons sections
     */
    public function sections(): BelongsToMany
    {
        return $this->belongsToMany(Section::class)
            ->withTimestamps();
    }


    /**
     * The questions for the season
     */
    public function questions(): HasManyThrough
    {
        return $this->hasManyDeep(Question::class,
        ['season_section', Section::class,
        'section_group',
        Group::class, 'group_question']);
    }


    /**
     * The Users who have predictions for the Season
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_season')
        ->as('predictions')
        ->withPivot('id')
        ->using(Predictions::class)

        ->withTimestamps();
    }


    /**
     * Return the active season
     *
     * @return null|Season
     */
    public static function active() : ?Season {
        return self::where('status', 'open')->first();
    }
}
