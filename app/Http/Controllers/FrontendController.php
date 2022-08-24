<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage()
    {
        $products = Product::latest()->get()->take(6);
        return view('frontend.homepage',compact('products'));
    }

    public function detailProduct(Product $product)
    {
        dd($product);
    }
}
