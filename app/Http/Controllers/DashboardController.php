<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can return a view for the dashboard or any other logic.
        return view('dashboard');  // Make sure you have a dashboard view in resources/views/dashboard.blade.php
    }
}
