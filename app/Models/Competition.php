<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'discipline',
        'date',
        'city',
    ];

    private $casts = [
        'date' => 'date:Y-m-d',
    ];
}
