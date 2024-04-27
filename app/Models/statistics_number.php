<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statistics_number extends Model
{
    use HasFactory;

    public $table = 'statistics_numbers';

    protected $fillable = [
        'stats_name',
        'stats_number',
        'icon_img',
    ];
}
