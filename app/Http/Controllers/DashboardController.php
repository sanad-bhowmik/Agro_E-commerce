<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard');
    }
    public function frontMission()
    {

        return view('frontMission');
    }

    public function storeMission(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'name' => 'required|string|max:255', // heroTitle
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // heroImg
            'details' => 'required|string', // heroParagraph
            'cardOnetitle1' => 'required|string|max:255',
            'cardOnedescription1' => 'required|string',
            'cardOnetitle2' => 'required|string|max:255',
            'cardOnedescription2' => 'required|string',
            'cardOnetitle3' => 'required|string|max:255',
            'cardOnedescription3' => 'required|string',
        ]);

        // Handle image upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/frontend/mission'), $imageName);
        }

        // Insert data into mission_details table
        \DB::table('mission_details')->insert([
            'heroTitle' => $request->input('name'),
            'heroImg' => $imageName,
            'heroParagraph' => $request->input('details'),
            'cardOneTitle' => $request->input('cardOnetitle1'),
            'cardOnedescription' => $request->input('cardOnedescription1'),
            'cardTwoTitle' => $request->input('cardOnetitle2'),
            'cardTwodescription' => $request->input('cardOnedescription2'),
            'cardThreeTitle' => $request->input('cardOnetitle3'),
            'cardThreedescription' => $request->input('cardOnedescription3'),
            'created_at' => now(),
            'updated_at' => now(),
            'status' => 1, // assuming 1 for active status
        ]);

        // Redirect back with a success message
        return response()->json(['message' => 'Mission details saved successfully!']);
    }

    public function addPricing()
    {

        return view('addPricing');
    }

    public function storePricing(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'cardTitle1' => 'nullable|string|max:255',
            'cardPrice1' => 'nullable|numeric',
            'cardFeatures1' => 'nullable|array',
            'cardTitle2' => 'nullable|string|max:255',
            'cardPrice2' => 'nullable|numeric',
            'cardFeatures2' => 'nullable|array',
            'cardTitle3' => 'nullable|string|max:255',
            'cardPrice3' => 'nullable|numeric',
            'cardFeatures3' => 'nullable|array',
        ]);

        Price::create([
            'cardOneTitle' => $validatedData['cardTitle1'] ?? '',
            'cardOnePrice' => $validatedData['cardPrice1'] ?? 0,
            'cardOneFeature' => json_encode($validatedData['cardFeatures1'] ?? []),  // Default to an empty array if null
            'cardTwoTitle' => $validatedData['cardTitle2'] ?? '',
            'cardTwoPrice' => $validatedData['cardPrice2'] ?? 0,
            'cardTwoFeature' => json_encode($validatedData['cardFeatures2'] ?? []),  // Default to an empty array if null
            'cardThreeTitle' => $validatedData['cardTitle3'] ?? '',
            'cardThreePrice' => $validatedData['cardPrice3'] ?? 0,
            'cardThreeFeature' => json_encode($validatedData['cardFeatures3'] ?? []),  // Default to an empty array if null
        ]);

        return redirect()->route('addPricing')->with('success', 'Pricing cards saved successfully!');
    }
}
