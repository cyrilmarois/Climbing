<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'zipcode',
        'creation_date'
    ];

    public function user(): HasMany
    {
        return $this->HasMany(UserProfile::class);
    }

    public function routes(): HasMany
    {
        return $this->hasMany(Route::class);
    }
}
