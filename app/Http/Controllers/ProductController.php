<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contact;
use App\Models\FrontAbout;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch the products where status is 1
        $products = Product::where('status', 1)->get();

        // Fetch the latest banner
        $banner = Banner::latest()->first();

        // Fetch the front about section where status is 'active'
        $frontAbout = FrontAbout::where('status', 'active')->latest()->first();

        // Fetch the contact information (assuming you need all records or just one)
        $contact = Contact::latest()->first(); // Adjust the query if needed (e.g., where status = 'active')

        // Return the view with all the data
        return view('welcome', compact('products', 'banner', 'frontAbout', 'contact'));
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
    public function AddProduct()
    {
        return view('AddProduct');
    }

    public function storeProduct(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'details' => 'nullable|string',
            'brand' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Save product data
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->details = $request->details;
        $product->brand = $request->brand;

        if ($request->hasFile('image')) {
            // Get the file extension
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the image to the desired directory
            $image->move(public_path('img/product'), $imageName);

            // Store only the image name in the database
            $product->image = $imageName;
        }

        $product->save();

        // Set a success message using session
        return redirect()->back()->with('success', '✓ Product added successfully!');
    }

    public function AllProducts()
    {
        $products = Product::paginate(10); // Fetch 10 products per page
        return view('AllProducts', compact('products'));
    }

    public function updateStatus(Request $request, $id)
    {
        $product = Product::find($id);
        $product->status = $request->status;
        $product->save();

        return response()->json(['success' => true]);
    }
}
