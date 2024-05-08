<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('banner.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('banner.add-banner');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            
            'image' => 'required|image|mimes:jpeg,png,jpg', // Max file size 2MB
        ]);

        // Store the image in the public/images folder
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;

        // Create a new property instance
        $Banner = new Banner();
        $Banner->image = $imagePath; // Save the image path
        $Banner->save();

        return redirect()->route('home-page')->with('success', 'Banner added successfully.');

    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $banner = Banner::findOrFail($id); // Fetch the property to be edited
        return view('banner.edit-banner', compact('banner')); // Pass the property data to the edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        $banner = Banner::findOrFail($id); // Fetch the property to be updated

        // Check if a new image is uploaded
        if ($request->hasFile('image_url')) {
            // Store the new image in the public/images folder
            $image = $request->file('image_url');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;

            // Delete the old image if exists
            if ($banner->image) {
                // Delete the old image file from storage
                $oldImagePath = public_path($banner->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Update the property's image path with the new image path
            $banner->image_url = $imagePath;
        }

        $banner->save();

        return redirect()->route('home-page')->with( 'Banner updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(banner $banner)
    {
        $banner->delete();
        return redirect()->back()->with('Banner deleted successfully.');
    }
}
