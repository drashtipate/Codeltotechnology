<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class contactus extends Model
{
    use HasFactory;

    public $table = 'contactuses';

    protected $fillable = [
        'contactId',
        'contact_name',
        'contact_email',
        'contact_subject',
        'contact_message',
    ];

    
}
