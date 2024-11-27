<?php

namespace App\Http\Controllers;

use App\Models\EventRegistration;
use Illuminate\Http\Request;

class EventRegistrationController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'mobile_number' => 'nullable|string|max:20|regex:/^[0-9]+$/', // Ensure phone numbers are numeric
            'user_type' => 'required|string|in:sponsor,athlete,attendee',
        ], [
            'first_name.required' => 'First Name is required.',
            'last_name.required' => 'Last Name is required.',
            'email.email' => 'The email must be a valid email address.',
            'mobile_number.regex' => 'The mobile number must contain only numbers.',
            'user_type.required' => 'Please select a role.',
        ]);

        // Create a new event registration record
        EventRegistration::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'] ?? null,
            'mobile_number' => $validatedData['mobile_number'] ?? null,
            'user_type' => $validatedData['user_type'],
        ]);

        // Set a success message in the session
        return redirect()->back()->with('success', 'Registration successful! Thank you for registering.');
    }
}
