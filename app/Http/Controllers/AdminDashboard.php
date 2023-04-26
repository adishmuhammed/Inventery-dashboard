<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Inertia\Inertia;

class AdminDashboard extends Controller
{

    public function index()
    {
        $products = Product::all();

        return Inertia::render('ProductIndex', [
            'products' => $products,
        ]);
    }

}
