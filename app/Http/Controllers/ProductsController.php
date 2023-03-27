<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::paginate(12);
        return view('gallery', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //sent blogs
        $blogs = Blogs::all();
        // sent products
        $products = Products::all();
        return view('products.create', compact('products', 'blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_image' => 'required',
        ]);
        // store product_image via storage facade/ store product_image via storage facade
        $image = $request->file('product_image');
        $path = Storage::put('public/images', $image);

        Products::create(
            [
                'product_name' => $request->product_name,
                'product_image' => $path,
            ]
        );
        return redirect()->route('products.create')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        return view('products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        $request->validate([
            'product_name' => 'required',
            'product_image' => 'required',
        ]);
        $products->update($request->all());
        return redirect()->route('products.edit', $products)->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        // delete a record
        Products::query()->where('id', $id)->delete();
        return redirect()->route('products.create')->with('success', 'Product deleted successfully.');
    }
}
