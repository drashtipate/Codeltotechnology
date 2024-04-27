<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footer_otherLink extends Model
{
    use HasFactory;

    public $table = 'footer_other_links';

    protected $fillable = [
        'link_name',
        'url_links',
        'title',
    ];
}
