<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerfrontController extends Controller
{
    //
    public function showCustomer()
    {
        $customers = Customer::all(); // Fetch all properties from the database
        return view('frontend.front', ['customers' => $customers]);
    }
}
