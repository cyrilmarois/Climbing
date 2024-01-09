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
        return $this->belongsToMany(User::class, 'routes_users');
    }

    public function usersRecords()
    {
        return $this->belongsToMany(User::class, 'routes_records');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'routes_tags');
    }
}
