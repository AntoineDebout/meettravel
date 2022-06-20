<?php

namespace App\Models\Activity\Entities;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ActivityCategoryPivot extends Pivot
{
    protected $table = 'activity_category_pivot';
}
