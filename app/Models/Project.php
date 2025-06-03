<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    //
     protected $fillable = [
        'title',
        'slug',
        'description',
        'image_path',
    ];

    public function getRouteKeyName()
    {
        return 'slug'; // agar route binding pakai slug
    }

    protected static function booted()
    {
        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }
}
