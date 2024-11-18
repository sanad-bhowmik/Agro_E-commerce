<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function mission()
    {
        // Get the latest mission based on the highest ID (descending order)
        $mission = Mission::orderBy('id', 'desc')->first();

        // Pass the single mission to the view
        return view('frontMission', compact('mission'));
    }


