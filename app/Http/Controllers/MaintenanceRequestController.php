<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceRequest;
use Illuminate\Http\Request;

class MaintenanceRequestController extends Controller
{
    //
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone_number' => 'required',
        'division' => 'required',
        'request_type' => 'required',
        'date' => 'required|date',
        'image' => 'image',
        'urgency' => 'required',
        'description' => 'required',
    ]);

    // Create a new MaintenanceRequest instance with the validated data
    $maintenanceRequest = MaintenanceRequest::create($validatedData);

    // Redirect the user to a success page or show a success message
    return redirect()->route('success-page');
}
}
