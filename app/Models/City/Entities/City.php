<?php

namespace App\Models\City\Entities;

use App\Models\Activity\Entities\Activity;
use App\Models\Country\Entities\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';

    /**
     * @return BelongsTo
     */
    public function country() : BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return BelongsToMany
     */
    public function activities() : BelongsToMany
    {
        return $this->belongsToMany(Activity::class, 'activity_city_pivot', 'city_id', 'activity_id')
            ->withTimestamps();
    }
}
