<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $products = Product::all();

        // Return the view with the products data
        return view('welcome', compact('products'));
    }
    public function show($id)
    {
        $product = Product::find($id); // Retrieve the product by ID
        return view('productDetails', compact('product'));
    }
    public function index2()
    {
        // Fetch all products from the database
        $products = Product::all();

        // Return the 'product' view with the products data
        return view('product', compact('products'));
    }
}
