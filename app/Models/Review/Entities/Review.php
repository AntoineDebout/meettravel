<?php

namespace App\Models\Review\Entities;

use App\Models\Activity\Entities\Activity;
use App\Models\User\Entities\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';

    /**
     * @return MorphToMany
     */
    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class, 'reviewable');
    }

    /**
     * @return MorphToMany
     */
    public function activities(): MorphToMany
    {
        return $this->morphedByMany(Activity::class, 'reviewable');
    }
}

