<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'imagehover',
        'gallery',
        'name',
        'price',
        'category',
        'sku',
        'tags',
        'description',
    ];
}
