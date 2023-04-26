<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Models\categories;
use App\Models\product;
use GuzzleHttp\Psr7\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $products = $user->products;

        return Inertia::render('JustProducts', [
            'products' => $products,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $request->user()->products()->create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $categories = Category::all();

        return Inertia::render('EditProduct', [
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    public function AddCategories()
    {
        return Inertia::render('AddCategories');
    }

    public function NewCategories(Request $request)
    {
        categories::create(['name' => $request->name]);

        return redirect()->back();
    }

    public function SetDistributor(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->distributor = $request->distributor;

        $product->save();

        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        $this->authorize('update', $product);

        $validated = $request->validated();

        $product->update($validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
