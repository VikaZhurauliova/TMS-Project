<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use App\Models\Tag;


class ProductController extends Controller
{
    public function product()
    {
        $product = Product::all();
        return view('product', [
            'product' => $product
        ]);
    }

    public function tags()
    {
        $tags = Tag::all();
        return view('product', [
            'tags' => $tags
        ]);
    }

    public function reviews()
    {
        $reviews = Review::find(1)->get();
        return view('product', [
            'review' => $reviews
        ]);
    }
}
