<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'grade_id',
        'club_id',
        'line_id',
        'color_id',
        'description',
        'opening_date',
        'closing_date',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'route_user');
    }

    public function routeRecords()
    {
        return $this->belongsToMany(User::class, 'route_record');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'route_tag');
    }

    public function grade(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    public function club(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Club::class);
    }

    public function color(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
