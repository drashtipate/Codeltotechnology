<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    
    public $table = 'clients';

    protected $fillable = [
        'clientId',
        'name',
        'image',
        'content',
        'description',
    ];
}
