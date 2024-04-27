<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siteconfig extends Model
{
    use HasFactory;

    protected $fillable = [
        'configId',
        'configKey',
        'configVal',
    ];
}
