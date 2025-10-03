<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Brand;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "title",
        "slug",
        "shor-dsc",
        "long_dsc",
        "subtitle",
        "regular_price",
        "sale_price",
        "rating",
        "stock",
        "brand_id",



    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
