<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('productDetails', compact('product'));
    }
    public function index2()
    {
        $products = Product::all();

        return view('product', compact('products'));
    }
    public function admin()
    {
        return view('admin');
    }
}
