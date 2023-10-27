<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'title',
    ];

    protected $hidden = [
        'image'
    ];

    
    // public function products()
    // {
    //     return $this->hasMany('App\Models\Product');
    // }
    
}
