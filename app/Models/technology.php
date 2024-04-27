<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technology extends Model
{
    use HasFactory;

    public $table = 'technologies';

    protected $fillable = [
        'technology_name',
        'url_links',
    ];
}
