<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Models\Mission;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ProductController::class, 'index'])->name('home');


Route::get('/mission', function () {
    // Get the most recent mission based on the highest ID
    $mission = Mission::orderBy('id', 'desc')->first();

    // Return the view with the single mission
    return view('mission', compact('mission'));
});



Route::get('/about', function () {
    return view('about');
});
Route::get('/product', [ProductController::class, 'index2'])->name('product.index2');



Route::get('/contact', function () {
    return view('contact');
});


Route::get('/price', function () {
    return view('price');
});
Route::get('/productDetails', function () {
    return view('productDetails');
});
Route::get('/productDetails/{id}', [ProductController::class, 'show'])->name('product.details');

Route::get('/admin', [ProductController::class, 'admin'])->name('admin');

// <<<<<<<<<<<<<<<<<<<<<    Login    >>>>>>>>>>>>>>>>>>>>>>
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// <<<<<<<<<<<<<<<<<<<<<    Login    >>>>>>>>>>>>>>>>>>>>>>


// <<<<<<<<<<<<<<<<<<<<<    Dashboard    >>>>>>>>>>>>>>>>>>>>>>
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/frontMission', [DashboardController::class, 'frontMission'])->name('frontMission');
Route::post('/frontMission/store', [DashboardController::class, 'storeMission'])->name('mission.store');

Route::get('/AddProduct', [ProductController::class, 'AddProduct']);
Route::post('/AddProduct', [ProductController::class, 'storeProduct'])->name('product.store');

Route::get('/AllProducts', [ProductController::class, 'AllProducts']);
Route::post('/update-product-status/{id}', [ProductController::class, 'updateStatus']);

Route::get('/addPricing', [DashboardController::class, 'addPricing'])->name('addPricing');
Route::post('/storePricing', [DashboardController::class, 'storePricing'])->name('storePricing');
// <<<<<<<<<<<<<<<<<<<<<    Dashboard    >>>>>>>>>>>>>>>>>>>>>>
