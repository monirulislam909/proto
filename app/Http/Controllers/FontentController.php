<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FontentController extends Controller
{
    public function fontend($slug = null)
    {


        // bortoman kon route a achi seta dhorbe
        $route = Route::current();
        // route name ta shorbe
        $routeName = $route->getName();

        //  product dhore anbe

        $category = Category::get();
        $tag = Tag::get();
        $product = Product::get();

        // category,tag ,onujae product show korabe

        if ($slug) {

            if ($routeName == "category.product") {
                $product = Category::where('slug_name', $slug)->firstOrFail()->products;
            } elseif ($routeName == "tag.product") {
                $product = Tag::where('slug_name', $slug)->firstOrFail()->products;
            }
        }
        return view('fontend.shop', compact('category', 'tag', 'product'));
    }

    public function single_product($slug)
    {
        $category = Category::get();
        $tag = Tag::get();
        $single_product =  Product::where('slug', $slug)->firstOrFail();

        // related product
        $related =  Category::find($single_product->categories[0]->id)->products;

        return view('fontend.single', compact('single_product', "category", "tag", 'related'));
    }

    // public function category($slug)
    // {
    //     $category = Category::get();
    //     $tag = Tag::get();
    //     $product = Product::get();
    //     $category_product =  Category::where("slug_name", $slug)->firstOrFail()->products;

    //     if ($category_product) {
    //         $product = $category_product;
    //     }

    //     return view('fontend.shop', compact('product', "category", "tag"));
    // }
}
