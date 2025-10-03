<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug_name', 'photo'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
