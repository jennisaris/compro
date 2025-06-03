<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyDescription extends Model
{
     protected $fillable = [
        'company_name',
        'tagline',
        'description',
        'logo_path',
    ];
}
