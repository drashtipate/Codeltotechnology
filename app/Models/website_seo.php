<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class website_seo extends Model
{
    use HasFactory;

    protected $fillable = [
        'seo_Id',
        'page',
        'canonical_url',
    ];
}
