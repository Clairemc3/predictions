<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    use HasFactory;

    /**
     * The section groups
     */
    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'section_group')
            ->withTimestamps();
    }
}
