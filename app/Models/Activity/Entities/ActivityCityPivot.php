<?php

namespace App\Models\Activity\Entities;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ActivityCityPivot extends Pivot
{
    protected $table = 'activity_city_pivot';
}
