<?php

namespace App\Models\Activity\Entities;

use App\Models\Booking\Entities\Booking;
use App\Models\Category\Entities\Category;
use App\Models\City\Entities\City;
use App\Models\Review\Entities\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activity';

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'activity_category_pivot', 'activity_id', 'category_code')
            ->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function cities(): BelongsToMany
    {
        return $this->belongsToMany(City::class, 'activity_city_pivot', 'activity_id', 'city_id')
            ->withTimestamps();
    }

    /**
     * @return HasMany
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * @return MorphToMany
     */
    public function reviews(): MorphToMany
    {
        return $this->morphToMany(Review::class, 'reviewable');
    }
}
