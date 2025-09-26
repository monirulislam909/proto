<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug_name',];


    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
