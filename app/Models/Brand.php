<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'slug_name', 'logo'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
