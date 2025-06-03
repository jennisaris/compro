<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    //
    protected $fillable = [
        'email',
        'phone',
        'address',
        'google_maps_embed',
    ];
}
