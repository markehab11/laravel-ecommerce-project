<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'email',
        'phone',
        'facebook',
        'twiter',
        'instgram',
        'youtube'
    ];
}
