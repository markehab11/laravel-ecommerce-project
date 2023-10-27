<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'image',
        'title',
        'description',
        'categorie_id',
        'slider_id',
        'color_id',
        'size_id',
        'price',
        'descount',
        'quantity'
    ];

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function slider()
    {
        return $this->belongsTo(Slider::class);
    }

    public function color()
    {
        return $this->belongsTo('App\Models\Color');
    }

    public function size()
    {
        return $this->belongsTo('App\Models\Size');
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    protected $casts = [
        'color_id' => 'array',
        'size_id' => 'array',
    ];
}
