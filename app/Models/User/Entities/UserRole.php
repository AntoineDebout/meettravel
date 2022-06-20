<?php

namespace App\Models\User\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserRole extends Model
{
    use HasFactory;

    const USER        = 'USER';
    const ADMIN       = 'ADMIN';
    const SUPER_ADMIN = 'SUPER_ADMIN';

    protected $table = 'user_role';

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var string
     */
    protected $primaryKey = 'code';

    /**
     * @var string
     */
    protected $keyType = 'string';

    /**
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
