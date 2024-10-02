<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use Illuminate\Support\Facades\File;

class AdminEnquiry extends Controller
{
    // Display all inquiries
    public function index()
    {
        $enquiryData = Enquiry::all();
        return view('admin.adminenquiry', compact('enquiryData'));
    }

    // Show form to create a new inquiry
    public function create()
    {
        return view('enquiry.create');
    }

    // Store a new inquiry
    public function store(Request $request)
    {
        // Validate input fields
        $validated = $request->validate([
            'property_name' => 'required|string|max:255',
            'property_location' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        // Create a new Enquiry entry
        Enquiry::create($validated);

        return redirect()->route('adminenquiry.index')->with('success', 'Enquiry submitted successfully.');
    }

    // Display an individual inquiry
    public function show(Enquiry $property)
    {
        return view('admin.enquiry.show', compact('property'));
    }

    // Edit a specific inquiry
    public function edit($id)
    {
        $property = Enquiry::findOrFail($id);
        return view('enquiry.edit', compact('property'));
    }

    // Update an existing inquiry
    public function update(Request $request, Enquiry $property)
    {
        $validated = $request->validate([
            'property_name' => 'required|string|max:255',
            'property_location' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        // Update inquiry details
        $property->update($validated);

        return redirect()->route('adminenquiry.index')->with('success', 'Enquiry updated successfully.');
    }

    // Delete an inquiry
    public function destroy(Enquiry $property)
    {
        $property->delete();
        return redirect()->route('adminenquiry.index')->with('success', 'Enquiry deleted successfully.');
    }
}
