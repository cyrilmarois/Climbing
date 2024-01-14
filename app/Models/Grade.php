<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public const GRADES = [
        '1',
        '2',
        '3',
        '4A',
        '4B',
        '4C',
        '4C+',
        '5A',
        '5A+',
        '5B',
        '5B+',
        '5C',
        '5C+',
        '6A',
        '6A+',
        '6B',
        '6B+',
        '6C',
        '6C+',
        '7A',
        '7A+',
        '7B',
        '7B+',
        '7C',
        '7C+',
        '8A',
        '8A+',
        '8B',
        '8B+',
        '8C',
        '8C+',
        '9A',
        '9A+',
        '9B',
        '9B+',
        '9C',
        '9C+'
    ];

    protected $fillable = [
        'name',
    ];

    public function routes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Route::class);
    }
}
