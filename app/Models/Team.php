<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'position',
        'bio',
        'image_path',
        'social_links'
    ];

    protected $casts = [
        'social_links' => 'array'
    ];
}