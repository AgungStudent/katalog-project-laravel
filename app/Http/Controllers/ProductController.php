<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();

        $validated['image'] = optional($request->file('image'))->store('product');
        Product::create($validated);
        return redirect()->route('product.index')->with('success', "berhasil menambah data");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function show(Product $product)
    // {
    //     return view('product.show', compact('product'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated = $request->validated();
        $validated['image'] = is_null($request->file('image')) ? $product->image : $request->file('image')->store('product');

        if (is_null($request->file('image'))) {
            $validated['image'] = $product->image;
        } else {
            Storage::delete($product->image);
            $validated['image'] = $request->file('image')->store('product');
        }

        $product->update($validated);
        return redirect()->route('product.index')->with('success', "Berhasil merubah produk");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Storage::delete($product->image);
        return redirect()->back()->with("success", "Berhasil menghapus produk");
    }

    public function showAll()
    {
        $products = Product::simplePaginate(10);
        return view('frontend.product',compact('products'));
    }

    public function ShowProduct(Product $product)
    {
       dd($product);
    }
}
