<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','filename_1', 'filename_2', 'filename_3', 'filename_4'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
