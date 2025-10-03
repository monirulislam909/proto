<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::latest()->with('galleries')->get();
        return view('backend.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tag = Tag::latest()->get();
        $category = Category::latest()->get();
        $brand = Brand::latest()->get();

        return view('backend.product.create', compact("tag", "category", "brand"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create([
            "title" => $request->title,
            "slug" => $this->makeSlug($request->title),
            "short-dsc" => $request->short_dsc,
            "long_dsc" => $request->long_dsc,
            "subtitle" => $request->subtitle,
            "regular_price" => $request->regular_price,
            "sale_price" => $request->sale_price,
            "rating" => $request->rating,
            "stock" => $request->stock,
            "brand_id" => $request->brand,
        ]);



        $file_name = '';
        if ($request->hasFile('gallery')) {
            foreach ($request->file("gallery") as $item) {

                $file_name = $this->fileUpload($item, 'media/gallery/product');

                Gallery::create([
                    "product_id" => $product->id,
                    "file_name" => $file_name,
                ]);
            }
        }

        $product->tags()->attach($request->tag);
        $product->categories()->attach($request->category);

        return back()->with("success", "Product Created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Brand deleted successfully');
    }
}
