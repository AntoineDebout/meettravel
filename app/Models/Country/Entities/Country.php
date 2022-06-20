<?php

namespace App\Models\Country\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    protected $table = 'country';

    /**
     * @return HasMany
     */
    public function cities(): HasMany
    {
        $this->hasMany(City::class);
    }
}
