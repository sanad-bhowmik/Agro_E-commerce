<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contact;
use App\Models\FrontAbout;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $activeProducts = Product::where('status', 1)->count();
        $inactiveProducts = Product::where('status', 0)->count();

        return view('dashboard', compact('totalProducts', 'activeProducts', 'inactiveProducts'));
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

    public function frontBanner()
    {

        return view('frontBanner');
    }

    public function storeBanner(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'firstVideo' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:10240',  // Limit to 10MB
            'secondVideo' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:10240',
            'thirdVideo' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:10240',
        ]);

        // Create a new Banner instance
        $banner = new Banner();
        $banner->title = $validatedData['title'];

        // Save each video individually to 'public/vid' and store only the file name in the database
        if ($request->hasFile('firstVideo')) {
            $firstVideo = $request->file('firstVideo');
            $firstVideoName = uniqid() . '_' . $firstVideo->getClientOriginalName();  // Generate unique file name
            $firstVideo->move(public_path('vid'), $firstVideoName);
            $banner->firstVideo = $firstVideoName;
        }

        if ($request->hasFile('secondVideo')) {
            $secondVideo = $request->file('secondVideo');
            $secondVideoName = uniqid() . '_' . $secondVideo->getClientOriginalName();
            $secondVideo->move(public_path('vid'), $secondVideoName);
            $banner->secondVideo = $secondVideoName;
        }

        if ($request->hasFile('thirdVideo')) {
            $thirdVideo = $request->file('thirdVideo');
            $thirdVideoName = uniqid() . '_' . $thirdVideo->getClientOriginalName();
            $thirdVideo->move(public_path('vid'), $thirdVideoName);
            $banner->thirdVideo = $thirdVideoName;
        }

        // Save the banner record to the database
        $banner->save();

        // Redirect back with a success message
        return redirect()->route('frontBanner')->with('success', 'Banner saved successfully!');
    }

    public function saveFrontAbout(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'description' => 'required|string|max:1000',
            'video' => 'required|file|mimes:mp4,avi,mkv|max:20240',
        ]);

        // Handle file upload
        if ($request->hasFile('video')) {
            $videoName = time() . '_' . $request->file('video')->getClientOriginalName();
            $videoPath = public_path('vid');

            if (!file_exists($videoPath)) {
                mkdir($videoPath, 0777, true);
            }

            $request->file('video')->move($videoPath, $videoName);
        }

        // Create a new entry in the database
        FrontAbout::create([
            'description' => $validatedData['description'],
            'video' => $videoName ?? null,
            'status' => 'active',
        ]);

        return redirect()->back()->with('success', 'Front About saved successfully!');
    }




    public function frontContact()
    {
        $contact = Contact::first();  // Assuming you're using just one row

        return view('frontContact', compact('contact'));
    }

    public function updateContact(Request $request)
    {
        $contact = Contact::first();

        $validated = $request->validate([
            'email' => 'required|email',
            'number' => 'required|regex:/^\+?[0-9]*$/',
            'address' => 'required|string',
        ]);

        $contact->email = $validated['email'];
        $contact->number = $validated['number'];
        $contact->address = $validated['address'];

        $contact->save();

        return redirect()->route('frontContact')->with('success', 'Contact details updated successfully!');
    }
}
