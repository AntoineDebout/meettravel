<?php

namespace App\Models\Category\Entities;

use App\Models\Activity\Entities\Activity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    const RELAX = 'RELAX';
    const SPORT = 'SPORT';
    const HISTORIC = 'HISTORIC';
    const CULTURAL = 'CULTURAL';

    protected $table = 'category';

    /**
     * @var string
     */
    protected $primaryKey = 'code';

    /**
     * @var string
     */
    protected $keyType = 'string';

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @return BelongsToMany
     */
    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(Activity::class, 'activity_category_pivot', 'category_code', 'activity_id')
            ->withTimestamps();
    }
}
