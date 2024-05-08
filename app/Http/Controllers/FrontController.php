<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Banner;


class FrontController extends Controller
{
    //
    
    public function show()
    {
        $properties = Project::all(); // Fetch all properties from the database
        return view('frontend.back', ['properties' => $properties]);
    }

    public function showBanner()
    {
        $banners = Banner::all(); // Fetch all properties from the database
        return view('frontend.front', ['banners' => $banners]);
    }

    
}
